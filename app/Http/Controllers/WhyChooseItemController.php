<?php

namespace App\Http\Controllers;

use App\Models\WhyChooseItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class WhyChooseItemController extends Controller
{
    private const UPLOAD_DIR = 'uploads/why-choose';

    public function index(): View
    {
        $items = WhyChooseItem::orderBy('sort_order')->orderBy('id')->get();

        return view('admin.why-choose.index', compact('items'));
    }

    public function create(): View
    {
        return view('admin.why-choose.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request, true);
        $data['icon'] = $this->uploadIcon($request);
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        WhyChooseItem::create($data);

        return redirect()->route('why-choose.index')->with('success', 'Item created successfully.');
    }

    public function edit(WhyChooseItem $whyChoose): View
    {
        return view('admin.why-choose.edit', ['item' => $whyChoose]);
    }

    public function update(Request $request, WhyChooseItem $whyChoose): RedirectResponse
    {
        $data = $this->validated($request, false);
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        if ($request->hasFile('icon')) {
            $this->deleteIcon($whyChoose);
            $data['icon'] = $this->uploadIcon($request);
        } else {
            unset($data['icon']);
        }

        $whyChoose->update($data);

        return redirect()->route('why-choose.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(WhyChooseItem $whyChoose): RedirectResponse
    {
        $this->deleteIcon($whyChoose);
        $whyChoose->delete();

        return redirect()->route('why-choose.index')->with('success', 'Item deleted successfully.');
    }

    private function validated(Request $request, bool $iconRequired): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:500'],
            'icon' => [$iconRequired ? 'required' : 'nullable', 'file', 'mimes:svg,png,webp,jpg,jpeg', 'max:1024'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }

    private function uploadIcon(Request $request): string
    {
        $file = $request->file('icon');
        $name = uniqid('why_').'.'.$file->getClientOriginalExtension();
        $file->move(public_path(self::UPLOAD_DIR), $name);

        return self::UPLOAD_DIR.'/'.$name;
    }

    /** Only remove files we uploaded, never the theme's bundled icons. */
    private function deleteIcon(WhyChooseItem $item): void
    {
        if (str_starts_with($item->icon, self::UPLOAD_DIR.'/')) {
            File::delete(public_path($item->icon));
        }
    }
}
