<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    /** Public contact form submission (AJAX from the theme, or a normal post without JS). */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $data = $request->validate([
            'fname' => ['required', 'string', 'max:100'],
            'lname' => ['nullable', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['nullable', 'string', 'max:5000'],
        ]);

        ContactMessage::create([
            'first_name' => $data['fname'],
            'last_name' => $data['lname'] ?? null,
            'phone' => $data['phone'],
            'email' => $data['email'],
            'message' => $data['message'] ?? null,
            'ip_address' => $request->ip(),
        ]);

        $success = 'Message Sent Successfully!';

        if ($request->expectsJson()) {
            return response()->json(['message' => $success]);
        }

        return redirect()->route('contact-us')->with('success', $success);
    }

    public function index(Request $request): View
    {
        $messages = ContactMessage::query()
            ->when($request->query('filter') === 'unread', fn ($query) => $query->unread())
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.contact.messages.index', compact('messages'));
    }

    public function show(ContactMessage $contactMessage): View
    {
        if (! $contactMessage->is_read) {
            $contactMessage->update(['read_at' => now()]);
        }

        return view('admin.contact.messages.show', ['message' => $contactMessage]);
    }

    public function destroy(ContactMessage $contactMessage): RedirectResponse
    {
        $contactMessage->delete();

        return redirect()->route('contact-messages.index')->with('success', 'Message deleted successfully.');
    }
}
