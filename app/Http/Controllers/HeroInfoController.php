<?php

namespace App\Http\Controllers;

use App\Models\HeroInfo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class HeroInfoController extends Controller
{
    private const UPLOAD_DIR = 'uploads/hero-info';

    public function edit(): View
    {
        return view('admin.hero-info.edit', ['info' => HeroInfo::first()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $info = HeroInfo::first();

        $data = $request->validate([
            'item_title' => ['required', 'string', 'max:255'],
            'item_text' => ['nullable', 'string', 'max:500'],
            'counter_1_number' => ['required', 'integer', 'min:0'],
            'counter_1_suffix' => ['nullable', 'string', 'max:10'],
            'counter_1_label' => ['nullable', 'string', 'max:255'],
            'counter_2_number' => ['required', 'integer', 'min:0'],
            'counter_2_suffix' => ['nullable', 'string', 'max:10'],
            'counter_2_label' => ['nullable', 'string', 'max:255'],
            'contact_title' => ['nullable', 'string', 'max:255'],
            'contact_email' => ['nullable', 'email', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:50'],
            'image' => [$info ? 'nullable' : 'required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        if ($request->hasFile('image')) {
            if ($info && str_starts_with($info->image, self::UPLOAD_DIR.'/')) {
                File::delete(public_path($info->image));
            }
            $file = $request->file('image');
            $name = uniqid('hero_').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(self::UPLOAD_DIR), $name);
            $data['image'] = self::UPLOAD_DIR.'/'.$name;
        } else {
            unset($data['image']);
        }

        $info ? $info->update($data) : HeroInfo::create($data);

        return redirect()->route('hero-info.edit')->with('success', 'Hero info updated successfully.');
    }
}
