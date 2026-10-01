@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">Services Section Settings</h3>
        <p>Heading and footer text of the services section. <a href="{{ route('services.index') }}">&larr; Back to services</a></p>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('services.section.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label" for="subtitle">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $section?->subtitle) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $section?->title) }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="footer_badge">Footer Badge</label>
                            <input type="text" class="form-control" id="footer_badge" name="footer_badge" value="{{ old('footer_badge', $section?->footer_badge) }}">
                        </div>
                        <div class="col-md-9">
                            <label class="form-label" for="footer_text">Footer Text</label>
                            <input type="text" class="form-control" id="footer_text" name="footer_text" value="{{ old('footer_text', $section?->footer_text) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="footer_link_text">Footer Link Text</label>
                            <input type="text" class="form-control" id="footer_link_text" name="footer_link_text" value="{{ old('footer_link_text', $section?->footer_link_text) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="footer_link_url">Footer Link URL</label>
                            <input type="text" class="form-control" id="footer_link_url" name="footer_link_url" value="{{ old('footer_link_url', $section?->footer_link_url) }}" placeholder="contact">
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
