@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Message from {{ $message->full_name }}</h3>
                <p><a href="{{ route('contact-messages.index') }}">&larr; Back to messages</a></p>
            </div>
            <div class="nk-block-head-content">
                <a href="mailto:{{ $message->email }}" class="btn btn-primary me-1">
                    <em class="icon ni ni-reply"></em><span>Reply by Email</span>
                </a>
                <form action="{{ route('contact-messages.destroy', $message) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Delete this message?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <span class="text-soft small d-block">Name</span>
                        {{ $message->full_name }}
                    </div>
                    <div class="col-md-3">
                        <span class="text-soft small d-block">Email</span>
                        <a href="mailto:{{ $message->email }}">{{ $message->email }}</a>
                    </div>
                    <div class="col-md-3">
                        <span class="text-soft small d-block">Phone</span>
                        <a href="tel:{{ preg_replace('/[^\d+]/', '', (string) $message->phone) }}">{{ $message->phone }}</a>
                    </div>
                    <div class="col-md-3">
                        <span class="text-soft small d-block">Received</span>
                        {{ $message->created_at->format('d M Y, h:i A') }}
                    </div>
                </div>
                <span class="text-soft small d-block mb-1">Message</span>
                <div class="p-3 bg-lighter rounded" style="white-space:pre-line">{{ $message->message ?: '—' }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
