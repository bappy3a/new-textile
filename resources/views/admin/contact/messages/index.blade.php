@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Contact Messages</h3>
                <p>Messages submitted from the Contact Us form.</p>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('contact-messages.index') }}" class="btn btn-{{ request('filter') === 'unread' ? 'outline-' : '' }}primary me-1">All</a>
                <a href="{{ route('contact-messages.index', ['filter' => 'unread']) }}" class="btn btn-{{ request('filter') === 'unread' ? '' : 'outline-' }}primary">Unread</a>
            </div>
        </div>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Message</th>
                                <th>Received</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($messages as $message)
                                <tr class="{{ $message->is_read ? '' : 'fw-bold' }}">
                                    <td>{{ $messages->firstItem() + $loop->index }}</td>
                                    <td>
                                        {{ $message->full_name }}
                                        @unless ($message->is_read)
                                            <span class="badge bg-primary ms-1">New</span>
                                        @endunless
                                    </td>
                                    <td>
                                        <div>{{ $message->email }}</div>
                                        <div class="text-soft small">{{ $message->phone }}</div>
                                    </td>
                                    <td>{{ \Illuminate\Support\Str::limit($message->message, 60) }}</td>
                                    <td><span title="{{ $message->created_at }}">{{ $message->created_at->diffForHumans() }}</span></td>
                                    <td class="text-end text-nowrap">
                                        <a href="{{ route('contact-messages.show', $message) }}" class="btn btn-sm btn-outline-primary">View</a>
                                        <form action="{{ route('contact-messages.destroy', $message) }}" method="POST" class="d-inline"
                                            onsubmit="return confirm('Delete this message?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="6" class="text-center py-4">No messages yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if ($messages->hasPages())
                <div class="card-inner">{{ $messages->links('pagination::bootstrap-5') }}</div>
            @endif
        </div>
    </div>
</div>
@endsection
