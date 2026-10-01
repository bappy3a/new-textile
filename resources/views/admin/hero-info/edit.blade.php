@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">Hero Info Section</h3>
        <p>Content of the info boxes shown below the hero slider on the home page.</p>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('hero-info.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">
                        <div class="col-12"><h6>Image Box</h6></div>
            <div class="col-md-6">
                <label class="form-label" for="item_title">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="item_title" name="item_title" required
                    value="{{ old('item_title', $info?->item_title) }}">
            </div>
                        <div class="col-md-6">
                            <label class="form-label" for="image">Image @unless ($info)<span class="text-danger">*</span>@endunless</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*" @unless ($info) required @endunless>
                            @if ($info)
                                <img src="{{ $info->image_url }}" alt="" class="rounded mt-2" style="height:80px">
                            @endif
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="item_text">Text</label>
                            <textarea class="form-control" id="item_text" name="item_text" rows="2">{{ old('item_text', $info?->item_text) }}</textarea>
                        </div>
                        <div class="col-12"><h6>Counter 1</h6></div>
            <div class="col-md-3">
                <label class="form-label" for="counter_1_number">Number <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="counter_1_number" name="counter_1_number" required min="0"
                    value="{{ old('counter_1_number', $info?->counter_1_number) }}">
            </div>
            <div class="col-md-3">
                <label class="form-label" for="counter_1_suffix">Suffix (e.g. +, K+)</label>
                <input type="text" class="form-control" id="counter_1_suffix" name="counter_1_suffix"
                    value="{{ old('counter_1_suffix', $info?->counter_1_suffix) }}">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="counter_1_label">Label</label>
                <input type="text" class="form-control" id="counter_1_label" name="counter_1_label"
                    value="{{ old('counter_1_label', $info?->counter_1_label) }}">
            </div>
                        <div class="col-12"><h6>Counter 2</h6></div>
            <div class="col-md-3">
                <label class="form-label" for="counter_2_number">Number <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="counter_2_number" name="counter_2_number" required min="0"
                    value="{{ old('counter_2_number', $info?->counter_2_number) }}">
            </div>
            <div class="col-md-3">
                <label class="form-label" for="counter_2_suffix">Suffix (e.g. +, K+)</label>
                <input type="text" class="form-control" id="counter_2_suffix" name="counter_2_suffix"
                    value="{{ old('counter_2_suffix', $info?->counter_2_suffix) }}">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="counter_2_label">Label</label>
                <input type="text" class="form-control" id="counter_2_label" name="counter_2_label"
                    value="{{ old('counter_2_label', $info?->counter_2_label) }}">
            </div>
                        <div class="col-12"><h6>Contact Box</h6></div>
            <div class="col-md-12">
                <label class="form-label" for="contact_title">Title</label>
                <input type="text" class="form-control" id="contact_title" name="contact_title"
                    value="{{ old('contact_title', $info?->contact_title) }}">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="contact_email">Email</label>
                <input type="email" class="form-control" id="contact_email" name="contact_email"
                    value="{{ old('contact_email', $info?->contact_email) }}">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="contact_phone">Phone</label>
                <input type="text" class="form-control" id="contact_phone" name="contact_phone"
                    value="{{ old('contact_phone', $info?->contact_phone) }}">
            </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
