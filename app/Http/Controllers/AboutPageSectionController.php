<?php

namespace App\Http\Controllers;

use App\Models\AboutPageSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class AboutPageSectionController extends Controller
{
    private const DEPARTMENT_SECTION = 'departments';

    private const UPLOAD_DIR = 'uploads/about-page';

    public function index(Request $request): View
    {
        $tab = array_key_exists($request->query('tab'), AboutPageSection::SECTIONS) ? $request->query('tab') : 'about';

        $sections = AboutPageSection::with(['items' => fn ($query) => $query->orderBy('type')->orderBy('sort_order')->orderBy('id')])
            ->get()
            ->keyBy('key');

        foreach (array_keys(AboutPageSection::SECTIONS) as $key) {
            $sections[$key] ??= new AboutPageSection(['key' => $key, 'is_active' => true]);
        }

        return view('admin.about-page.index', compact('sections', 'tab'));
    }

    public function update(Request $request, string $key): RedirectResponse
    {
        abort_unless(isset(AboutPageSection::SECTIONS[$key]), 404);

        $section = AboutPageSection::firstOrNew(['key' => $key]);
        $images = array_keys($section->config()['images']);

        $rules = $key === self::DEPARTMENT_SECTION
            ? [
                'title' => ['required', 'string', 'max:255'],
                'description' => ['nullable', 'string', 'max:1000'],
            ]
            : [
                'subtitle' => ['nullable', 'string', 'max:255'],
                'title' => ['required', 'string', 'max:255'],
                'description' => ['nullable', 'string', 'max:1000'],
                'button_text' => ['nullable', 'string', 'max:100'],
                'button_url' => ['nullable', 'string', 'max:255'],
                'contact_label' => ['nullable', 'string', 'max:255'],
                'contact_phone' => ['nullable', 'string', 'max:50'],
            ];
        foreach ($images as $field) {
            $rules[$field] = ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'];
        }

        $data = $request->validate($rules);
        $data['is_active'] = $request->boolean('is_active');

        foreach ($images as $field) {
            unset($data[$field]);
            if ($request->hasFile($field)) {
                if ($section->$field && str_starts_with($section->$field, self::UPLOAD_DIR.'/')) {
                    File::delete(public_path($section->$field));
                }
                $file = $request->file($field);
                $name = uniqid('about_page_').'.'.$file->getClientOriginalExtension();
                $file->move(public_path(self::UPLOAD_DIR), $name);
                $data[$field] = self::UPLOAD_DIR.'/'.$name;
            }
        }

        $section->fill($data)->save();

        return redirect()->route('about-page.index', ['tab' => $key])->with('success', 'Section updated successfully.');
    }
}
