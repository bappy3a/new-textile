<?php

namespace App\Http\Controllers;

use App\Models\ServiceSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceSectionController extends Controller
{
    public function edit(): View
    {
        return view('admin.services.section', ['section' => ServiceSection::first()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'subtitle' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'footer_badge' => ['nullable', 'string', 'max:50'],
            'footer_text' => ['nullable', 'string', 'max:255'],
            'footer_link_text' => ['nullable', 'string', 'max:100'],
            'footer_link_url' => ['nullable', 'string', 'max:255'],
        ]);

        $section = ServiceSection::first();
        $section ? $section->update($data) : ServiceSection::create($data);

        return redirect()->route('services.section.edit')->with('success', 'Section updated successfully.');
    }
}
