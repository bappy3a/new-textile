<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class AboutUsController extends Controller
{
    private const UPLOAD_DIR = 'uploads/about-us';

    public function edit(): View
    {
        return view('admin.about-us.edit', ['about' => AboutUs::first()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $about = AboutUs::first();
        $imageRule = [$about ? 'nullable' : 'required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'];

        $data = $request->validate([
            'subtitle' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'item_title' => ['nullable', 'string', 'max:255'],
            'counter_number' => ['required', 'integer', 'min:0'],
            'counter_suffix' => ['nullable', 'string', 'max:10'],
            'counter_label' => ['nullable', 'string', 'max:255'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_url' => ['nullable', 'string', 'max:255'],
            'contact_label' => ['nullable', 'string', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:50'],
            'image_1' => $imageRule,
            'image_2' => $imageRule,
        ]);

        foreach (['image_1', 'image_2'] as $field) {
            if ($request->hasFile($field)) {
                if ($about && str_starts_with($about->$field, self::UPLOAD_DIR.'/')) {
                    File::delete(public_path($about->$field));
                }
                $file = $request->file($field);
                $name = uniqid('about_').'.'.$file->getClientOriginalExtension();
                $file->move(public_path(self::UPLOAD_DIR), $name);
                $data[$field] = self::UPLOAD_DIR.'/'.$name;
            } else {
                unset($data[$field]);
            }
        }

        $about ? $about->update($data) : AboutUs::create($data);

        return redirect()->route('about-us.edit')->with('success', 'About us updated successfully.');
    }
}
