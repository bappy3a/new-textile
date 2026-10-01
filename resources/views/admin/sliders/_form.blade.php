@php($slider = $slider ?? null)
@csrf
<div class="row g-4">
    <div class="col-md-6">
        <label class="form-label" for="subtitle">Subtitle</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle"
            value="{{ old('subtitle', $slider?->subtitle) }}" placeholder="Welcome to Textile Industry">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="title" name="title" required
            value="{{ old('title', $slider?->title) }}">
    </div>
    <div class="col-12">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $slider?->description) }}</textarea>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="button_text">Button Text</label>
        <input type="text" class="form-control" id="button_text" name="button_text"
            value="{{ old('button_text', $slider?->button_text) }}">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="button_url">Button URL</label>
        <input type="text" class="form-control" id="button_url" name="button_url"
            value="{{ old('button_url', $slider?->button_url) }}" placeholder="contact or https://example.com">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="image">
            Background Image @unless ($slider)<span class="text-danger">*</span>@endunless
        </label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*"
            @unless ($slider) required @endunless>
        <div class="form-note">JPG, PNG or WEBP, max 4MB. Recommended 1920x900.</div>
        @if ($slider)
            <img src="{{ $slider->image_url }}" alt="" class="rounded mt-2" style="height:90px">
        @endif
    </div>
    <div class="col-md-3">
        <label class="form-label" for="sort_order">Sort Order</label>
        <input type="number" min="0" class="form-control" id="sort_order" name="sort_order"
            value="{{ old('sort_order', $slider?->sort_order ?? 0) }}">
    </div>
    <div class="col-md-3 d-flex align-items-end">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1"
                @checked(old('is_active', $slider?->is_active ?? true))>
            <label class="custom-control-label" for="is_active">Active</label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('sliders.index') }}" class="btn btn-light">Cancel</a>
    </div>
</div>
