<?php

namespace App\Http\Controllers;

use App\Models\AboutPageItem;
use App\Models\AboutPageSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AboutPageItemController extends Controller
{
    private const DEPARTMENT_SECTION = 'departments';

    private const UPLOAD_DIR = 'uploads/about-page';

    public function create(Request $request): View
    {
        $section = $this->sectionKey($request->query('section'));

        return view('admin.about-page.items.create', compact('section'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['icon'] = $request->hasFile('icon') ? $this->uploadIcon($request) : null;

        if ($data['section'] === self::DEPARTMENT_SECTION) {
            $data['sort_order'] = (int) AboutPageItem::where('section', self::DEPARTMENT_SECTION)->max('sort_order') + 1;
        }

        AboutPageItem::create($data);

        return redirect()->route('about-page.index', ['tab' => $data['section']])
            ->with('success', 'Item created successfully.');
    }

    public function edit(AboutPageItem $item): View
    {
        return view('admin.about-page.items.edit', ['item' => $item, 'section' => $item->section]);
    }

    public function update(Request $request, AboutPageItem $item): RedirectResponse
    {
        $data = $this->validated($request);

        if ($request->hasFile('icon')) {
            $this->deleteIcon($item);
            $data['icon'] = $this->uploadIcon($request);
        } elseif ($request->boolean('remove_icon')) {
            $this->deleteIcon($item);
            $data['icon'] = null;
        } else {
            unset($data['icon']);
        }

        $item->update($data);

        return redirect()->route('about-page.index', ['tab' => $item->section])
            ->with('success', 'Item updated successfully.');
    }

    public function destroy(AboutPageItem $item): RedirectResponse
    {
        $this->deleteIcon($item);
        $item->delete();

        return redirect()->route('about-page.index', ['tab' => $item->section])
            ->with('success', 'Item deleted successfully.');
    }

    private function sectionKey(?string $key): string
    {
        abort_unless($key && isset(AboutPageSection::SECTIONS[$key]), 404);

        return $key;
    }

    private function validated(Request $request): array
    {
        $section = $this->sectionKey($request->input('section'));

        if ($section === self::DEPARTMENT_SECTION) {
            $data = $request->validate([
                'section' => ['required', 'string'],
                'title' => ['required', 'string', 'max:255'],
                'description' => ['nullable', 'string', 'max:1000'],
            ]);
            $data['type'] = 'department';
            $data['is_active'] = true;

            return $data;
        }

        $data = $request->validate([
            'section' => ['required', 'string'],
            'type' => ['required', Rule::in(array_keys(AboutPageSection::SECTIONS[$section]['types']))],
            'label' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'number' => ['nullable', 'string', 'max:20'],
            'suffix' => ['nullable', 'string', 'max:20'],
            'icon' => ['nullable', 'file', 'mimes:svg,png,webp,jpg,jpeg', 'max:1024'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        return $data;
    }

    private function uploadIcon(Request $request): string
    {
        $file = $request->file('icon');
        $name = uniqid('about_item_').'.'.$file->getClientOriginalExtension();
        $file->move(public_path(self::UPLOAD_DIR), $name);

        return self::UPLOAD_DIR.'/'.$name;
    }

    /** Only remove files we uploaded, never the theme's bundled icons. */
    private function deleteIcon(AboutPageItem $item): void
    {
        if ($item->icon && str_starts_with($item->icon, self::UPLOAD_DIR.'/')) {
            File::delete(public_path($item->icon));
        }
    }
}
