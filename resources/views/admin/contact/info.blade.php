@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">Contact Us Page</h3>
        <p>Contact details, form heading and map shown on the Contact Us page.</p>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('contact-info.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">
                        <div class="col-12"><h5 class="title mb-0">Contact Details</h5></div>
                        <div class="col-md-4">
                            <label class="form-label" for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact?->email) }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contact?->phone) }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="address">Location</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $contact?->address) }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            @if ($contact?->image)
                                <img src="{{ $contact->image_url }}" alt="" class="rounded mt-2" style="height:80px">
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="working_hours_title">Working Hours Title</label>
                            <input type="text" class="form-control" id="working_hours_title" name="working_hours_title" value="{{ old('working_hours_title', $contact?->working_hours_title) }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="working_hours">Working Hours</label>
                            <textarea class="form-control" id="working_hours" name="working_hours" rows="3">{{ old('working_hours', $contact?->working_hours) }}</textarea>
                            <div class="form-note">One line per entry.</div>
                        </div>

                        <div class="col-12"><hr class="my-1"><h5 class="title mb-0">Contact Form Heading</h5></div>
                        <div class="col-md-6">
                            <label class="form-label" for="form_subtitle">Subtitle</label>
                            <input type="text" class="form-control" id="form_subtitle" name="form_subtitle" value="{{ old('form_subtitle', $contact?->form_subtitle) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="form_title">Title</label>
                            <input type="text" class="form-control" id="form_title" name="form_title" value="{{ old('form_title', $contact?->form_title) }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="form_description">Description</label>
                            <textarea class="form-control" id="form_description" name="form_description" rows="3">{{ old('form_description', $contact?->form_description) }}</textarea>
                        </div>

                        <div class="col-12"><hr class="my-1"><h5 class="title mb-0">Map</h5></div>
                        <div class="col-md-6">
                            <label class="form-label" for="map_subtitle">Subtitle</label>
                            <input type="text" class="form-control" id="map_subtitle" name="map_subtitle" value="{{ old('map_subtitle', $contact?->map_subtitle) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="map_title">Title</label>
                            <input type="text" class="form-control" id="map_title" name="map_title" value="{{ old('map_title', $contact?->map_title) }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="map_embed_url">Google Map Embed URL</label>
                            <textarea class="form-control" id="map_embed_url" name="map_embed_url" rows="2">{{ old('map_embed_url', $contact?->map_embed_url) }}</textarea>
                            <div class="form-note">Google Maps → Share → Embed a map → copy only the <code>src="..."</code> link. Leave empty to hide the map.</div>
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
