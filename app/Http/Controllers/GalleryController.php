<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\GallerySection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class GalleryController extends Controller
{
    private const UPLOAD_DIR = 'uploads/gallery';

    public function index(): View
    {
        return view('admin.gallery.index', [
            'images' => GalleryImage::orderBy('sort_order')->orderBy('id')->get(),
            'section' => GallerySection::first(),
        ]);
    }

    public function create(): View
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'images' => ['required', 'array', 'max:20'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $order = (int) GalleryImage::max('sort_order');
        foreach ($request->file('images') as $file) {
            GalleryImage::create([
                'image' => $this->upload($file),
                'sort_order' => ++$order,
                'is_active' => $request->boolean('is_active', true),
            ]);
        }

        return redirect()->route('gallery.index')->with('success', 'Images uploaded successfully.');
    }

    public function edit(GalleryImage $gallery): View
    {
        return view('admin.gallery.edit', ['image' => $gallery]);
    }

    public function update(Request $request, GalleryImage $gallery): RedirectResponse
    {
        $data = $request->validate([
            'alt_text' => ['nullable', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            $this->deleteFile($gallery);
            $data['image'] = $this->upload($request->file('image'));
        } else {
            unset($data['image']);
        }

        $gallery->update($data);

        return redirect()->route('gallery.index')->with('success', 'Image updated successfully.');
    }

    public function destroy(GalleryImage $gallery): RedirectResponse
    {
        $this->deleteFile($gallery);
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully.');
    }

    public function updateSection(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'subtitle' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
        ]);

        $section = GallerySection::first();
        $section ? $section->update($data) : GallerySection::create($data);

        return redirect()->route('gallery.index')->with('success', 'Section heading updated successfully.');
    }

    private function upload(UploadedFile $file): string
    {
        $name = uniqid('gallery_').'.'.$file->getClientOriginalExtension();
        $file->move(public_path(self::UPLOAD_DIR), $name);

        return self::UPLOAD_DIR.'/'.$name;
    }

    /** Only remove files we uploaded, never the theme's bundled images. */
    private function deleteFile(GalleryImage $image): void
    {
        if (str_starts_with($image->image, self::UPLOAD_DIR.'/')) {
            File::delete(public_path($image->image));
        }
    }
}
