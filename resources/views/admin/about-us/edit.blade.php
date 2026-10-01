@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">About Us Section</h3>
        <p>Content of the About Us section on the home page.</p>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('about-us.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">
                        <div class="col-12"><h6>Images</h6></div>
                        <div class="col-md-6">
                            <label class="form-label" for="image_1">Image 1 (large) @unless ($about)<span class="text-danger">*</span>@endunless</label>
                            <input type="file" class="form-control" id="image_1" name="image_1" accept="image/*" @unless ($about) required @endunless>
                            @if ($about)
                                <img src="{{ $about->image_1_url }}" alt="" class="rounded mt-2" style="height:80px">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="image_2">Image 2 (small) @unless ($about)<span class="text-danger">*</span>@endunless</label>
                            <input type="file" class="form-control" id="image_2" name="image_2" accept="image/*" @unless ($about) required @endunless>
                            @if ($about)
                                <img src="{{ $about->image_2_url }}" alt="" class="rounded mt-2" style="height:80px">
                            @endif
                        </div>
                        <div class="col-12"><h6>Experience Counter</h6></div>
                        <div class="col-md-3">
                            <label class="form-label" for="counter_number">Number <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="counter_number" name="counter_number" required min="0"
                                value="{{ old('counter_number', $about?->counter_number) }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="counter_suffix">Suffix (e.g. +)</label>
                            <input type="text" class="form-control" id="counter_suffix" name="counter_suffix"
                                value="{{ old('counter_suffix', $about?->counter_suffix) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="counter_label">Label</label>
                            <input type="text" class="form-control" id="counter_label" name="counter_label"
                                value="{{ old('counter_label', $about?->counter_label) }}">
                        </div>
                        <div class="col-12"><h6>Content</h6></div>
                        <div class="col-md-6">
                            <label class="form-label" for="subtitle">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                value="{{ old('subtitle', $about?->subtitle) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" required
                                value="{{ old('title', $about?->title) }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $about?->description) }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="item_title">Feature Item Title</label>
                            <input type="text" class="form-control" id="item_title" name="item_title"
                                value="{{ old('item_title', $about?->item_title) }}">
                        </div>
                        <div class="col-12"><h6>Button &amp; Contact</h6></div>
                        <div class="col-md-6">
                            <label class="form-label" for="button_text">Button Text</label>
                            <input type="text" class="form-control" id="button_text" name="button_text"
                                value="{{ old('button_text', $about?->button_text) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="button_url">Button URL</label>
                            <input type="text" class="form-control" id="button_url" name="button_url" placeholder="about"
                                value="{{ old('button_url', $about?->button_url) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="contact_label">Contact Label</label>
                            <input type="text" class="form-control" id="contact_label" name="contact_label"
                                value="{{ old('contact_label', $about?->contact_label) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="contact_phone">Phone</label>
                            <input type="text" class="form-control" id="contact_phone" name="contact_phone"
                                value="{{ old('contact_phone', $about?->contact_phone) }}">
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
