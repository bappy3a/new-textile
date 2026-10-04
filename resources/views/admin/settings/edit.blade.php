@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">Settings</h3>
        <p>Site logos and footer content.</p>
    </div>

    @include('admin.sliders._alerts')

    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @foreach (\App\Models\Setting::GROUPS as $group => $fields)
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <h5 class="title mb-3">{{ $group }}</h5>
                        <div class="row g-4">
                            @foreach ($fields as $key => $field)
                                @php($value = old($key, $values[$key] ?? null))
                                <div class="{{ in_array($field['type'], ['textarea', 'links']) ? 'col-12' : 'col-md-4' }}">
                                    <label class="form-label" for="{{ $key }}">
                                        @isset($field['icon'])<i class="fa-brands {{ $field['icon'] }} me-1"></i>@endisset
                                        {{ $field['label'] }}
                                    </label>

                                    @switch($field['type'])
                                        @case('image')
                                            <input type="file" class="form-control" id="{{ $key }}" name="{{ $key }}" accept=".png,.jpg,.jpeg,.webp,.svg,.ico">
                                            @if ($values[$key] ?? null)
                                                <div class="mt-2 p-2 rounded d-inline-block" style="background:{{ $key === 'footer_logo' ? '#0B2B3F' : '#f5f6fa' }}">
                                                    <img src="{{ asset($values[$key]) }}" alt="" style="max-height:50px;max-width:200px">
                                                </div>
                                            @endif
                                            @break
                                        @case('pdf')
                                            <input type="file" class="form-control" id="{{ $key }}" name="{{ $key }}" accept=".pdf,application/pdf">
                                            @if ($values[$key] ?? null)
                                                <div class="mt-2"><a href="{{ route('company-profile.download') }}" target="_blank"><em class="icon ni ni-file-pdf"></em> Current file (click to view)</a></div>
                                            @endif
                                            @break
                                        @case('textarea')
                                        @case('links')
                                            <textarea class="form-control" id="{{ $key }}" name="{{ $key }}" rows="{{ $field['type'] === 'links' ? 5 : 3 }}">{{ $value }}</textarea>
                                            @break
                                        @default
                                            <input type="{{ $field['type'] === 'email' ? 'email' : 'text' }}" class="form-control" id="{{ $key }}" name="{{ $key }}"
                                                value="{{ $value }}" @if ($field['type'] === 'url') placeholder="https://..." @endif>
                                    @endswitch

                                    @isset($field['note'])
                                        <div class="form-note">{!! $field['note'] !!}</div>
                                    @endisset
                                    @if ($field['type'] === 'url')
                                        <div class="form-note">Leave empty to hide this icon.</div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="nk-block">
            <button type="submit" class="btn btn-primary">Save Settings</button>
        </div>
    </form>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
@endsection
