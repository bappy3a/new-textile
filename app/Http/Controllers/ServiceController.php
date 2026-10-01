<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ServiceController extends Controller
{
    private const UPLOAD_DIR = 'uploads/services';

    public function index(): View
    {
        $services = Service::orderBy('sort_order')->orderBy('id')->get();

        return view('admin.services.index', compact('services'));
    }

    public function create(): View
    {
        return view('admin.services.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request, true);
        $data['icon'] = $this->uploadIcon($request);
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        Service::create($data);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service): View
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service): RedirectResponse
    {
        $data = $this->validated($request, false);
        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        if ($request->hasFile('icon')) {
            $this->deleteIcon($service);
            $data['icon'] = $this->uploadIcon($request);
        } else {
            unset($data['icon']);
        }

        $service->update($data);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $this->deleteIcon($service);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

    private function validated(Request $request, bool $iconRequired): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:500'],
            'link_url' => ['nullable', 'string', 'max:255'],
            'icon' => [$iconRequired ? 'required' : 'nullable', 'file', 'mimes:svg,png,webp,jpg,jpeg', 'max:1024'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }

    private function uploadIcon(Request $request): string
    {
        $file = $request->file('icon');
        $name = uniqid('service_').'.'.$file->getClientOriginalExtension();
        $file->move(public_path(self::UPLOAD_DIR), $name);

        return self::UPLOAD_DIR.'/'.$name;
    }

    /** Only remove files we uploaded, never the theme's bundled icons. */
    private function deleteIcon(Service $service): void
    {
        if (str_starts_with($service->icon, self::UPLOAD_DIR.'/')) {
            File::delete(public_path($service->icon));
        }
    }
}
