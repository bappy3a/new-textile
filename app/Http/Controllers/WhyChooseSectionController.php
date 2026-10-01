<?php

namespace App\Http\Controllers;

use App\Models\WhyChooseSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class WhyChooseSectionController extends Controller
{
    private const UPLOAD_DIR = 'uploads/why-choose';

    public function edit(): View
    {
        return view('admin.why-choose.section', ['section' => WhyChooseSection::first()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $section = WhyChooseSection::first();
        $imageRule = [$section ? 'nullable' : 'required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'];

        $data = $request->validate([
            'subtitle' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'image_1' => $imageRule,
            'image_2' => $imageRule,
            'image_3' => $imageRule,
        ]);

        foreach (['image_1', 'image_2', 'image_3'] as $field) {
            if ($request->hasFile($field)) {
                if ($section && str_starts_with($section->$field, self::UPLOAD_DIR.'/')) {
                    File::delete(public_path($section->$field));
                }
                $file = $request->file($field);
                $name = uniqid('why_').'.'.$file->getClientOriginalExtension();
                $file->move(public_path(self::UPLOAD_DIR), $name);
                $data[$field] = self::UPLOAD_DIR.'/'.$name;
            } else {
                unset($data[$field]);
            }
        }

        $section ? $section->update($data) : WhyChooseSection::create($data);

        return redirect()->route('why-choose.section.edit')->with('success', 'Section updated successfully.');
    }
}
