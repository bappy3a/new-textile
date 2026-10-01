<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class SettingController extends Controller
{
    private const UPLOAD_DIR = 'uploads/settings';

    public function edit(): View
    {
        return view('admin.settings.edit', ['values' => Setting::allValues()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $fields = Setting::fields();

        $rules = [];
        foreach ($fields as $key => $field) {
            $rules[$key] = match ($field['type']) {
                'image' => ['nullable', 'file', 'mimes:jpg,jpeg,png,webp,svg,ico', 'max:2048'],
                'email' => ['nullable', 'email', 'max:255'],
                'url' => ['nullable', 'string', 'max:500', 'regex:/^(#|https?:\/\/\S+)$/'],
                'textarea', 'links' => ['nullable', 'string', 'max:2000'],
                default => ['nullable', 'string', 'max:255'],
            };
        }

        $data = $request->validate($rules, [
            'regex' => 'The :attribute must be a full link starting with https:// (or # for none).',
        ]);

        foreach ($fields as $key => $field) {
            if ($field['type'] === 'image') {
                if ($request->hasFile($key)) {
                    $this->deleteUpload(Setting::get($key));
                    $file = $request->file($key);
                    $name = $key.'_'.uniqid().'.'.$file->getClientOriginalExtension();
                    $file->move(public_path(self::UPLOAD_DIR), $name);
                    Setting::updateOrCreate(['key' => $key], ['value' => self::UPLOAD_DIR.'/'.$name]);
                }

                continue;
            }

            Setting::updateOrCreate(['key' => $key], ['value' => $data[$key] ?? null]);
        }

        return redirect()->route('settings.edit')->with('success', 'Settings updated successfully.');
    }

    /** Only remove files we uploaded, never the theme's bundled images. */
    private function deleteUpload(?string $path): void
    {
        if ($path && str_starts_with($path, self::UPLOAD_DIR.'/')) {
            File::delete(public_path($path));
        }
    }
}
