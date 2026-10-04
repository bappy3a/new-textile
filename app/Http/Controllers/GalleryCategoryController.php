<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class GalleryCategoryController extends Controller
{
    public function index(): View
    {
        $categories = GalleryCategory::query()
            ->withCount('images')
            ->orderByDesc('is_favorite')
            ->orderBy('name')
            ->get();

        return view('admin.gallery-categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.gallery-categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        GalleryCategory::create($this->validated($request));

        return redirect()->route('gallery-categories.index')
            ->with('success', 'Gallery category created successfully.');
    }

    public function edit(GalleryCategory $galleryCategory): View
    {
        return view('admin.gallery-categories.edit', compact('galleryCategory'));
    }

    public function update(Request $request, GalleryCategory $galleryCategory): RedirectResponse
    {
        $galleryCategory->update($this->validated($request, $galleryCategory));

        return redirect()->route('gallery-categories.index')
            ->with('success', 'Gallery category updated successfully.');
    }

    public function destroy(GalleryCategory $galleryCategory): RedirectResponse
    {
        $galleryCategory->delete();

        return redirect()->route('gallery-categories.index')
            ->with('success', 'Gallery category deleted successfully.');
    }

    /** @return array{name: string, is_favorite: bool} */
    private function validated(Request $request, ?GalleryCategory $galleryCategory = null): array
    {
        $data = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('gallery_categories', 'name')->ignore($galleryCategory),
            ],
        ]);
        $data['is_favorite'] = $request->boolean('is_favorite');

        return $data;
    }
}
