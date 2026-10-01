<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ContactInfoController extends Controller
{
    private const UPLOAD_DIR = 'uploads/contact';

    public function edit(): View
    {
        return view('admin.contact.info', ['contact' => ContactInfo::first()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $contact = ContactInfo::first();

        $data = $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'working_hours_title' => ['nullable', 'string', 'max:255'],
            'working_hours' => ['nullable', 'string', 'max:1000'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'address' => ['nullable', 'string', 'max:255'],
            'form_subtitle' => ['nullable', 'string', 'max:255'],
            'form_title' => ['nullable', 'string', 'max:255'],
            'form_description' => ['nullable', 'string', 'max:1000'],
            'map_subtitle' => ['nullable', 'string', 'max:255'],
            'map_title' => ['nullable', 'string', 'max:255'],
            'map_embed_url' => ['nullable', 'url', 'starts_with:https://www.google.com/maps/embed', 'max:2000'],
        ], [
            'map_embed_url.starts_with' => 'The map URL must be a Google Maps embed link (Share → Embed a map → copy the src).',
        ]);

        if ($request->hasFile('image')) {
            if ($contact?->image && str_starts_with($contact->image, self::UPLOAD_DIR.'/')) {
                File::delete(public_path($contact->image));
            }
            $file = $request->file('image');
            $name = uniqid('contact_').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(self::UPLOAD_DIR), $name);
            $data['image'] = self::UPLOAD_DIR.'/'.$name;
        } else {
            unset($data['image']);
        }

        $contact ? $contact->update($data) : ContactInfo::create($data);

        return redirect()->route('contact-info.edit')->with('success', 'Contact info updated successfully.');
    }
}
