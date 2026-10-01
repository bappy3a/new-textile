@php($service = $service ?? null)
@csrf
<div class="row g-4">
    <div class="col-md-6">
        <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="title" name="title" required
            value="{{ old('title', $service?->title) }}">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="link_url">Link URL</label>
        <input type="text" class="form-control" id="link_url" name="link_url"
            value="{{ old('link_url', $service?->link_url) }}" placeholder="services">
    </div>
    <div class="col-12">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $service?->description) }}</textarea>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="icon">Icon @unless ($service)<span class="text-danger">*</span>@endunless</label>
        <input type="file" class="form-control" id="icon" name="icon" accept=".svg,.png,.webp,.jpg,.jpeg"
            @unless ($service) required @endunless>
        <div class="form-note">SVG or PNG, max 1MB. Shown on a dark background, so use a light icon.</div>
        @if ($service)
            <img src="{{ $service->icon_url }}" alt="" width="50" class="mt-2" style="background:#0B2B3F;padding:8px;border-radius:6px">
        @endif
    </div>
    <div class="col-md-3">
        <label class="form-label" for="sort_order">Sort Order</label>
        <input type="number" min="0" class="form-control" id="sort_order" name="sort_order"
            value="{{ old('sort_order', $service?->sort_order ?? 0) }}">
    </div>
    <div class="col-md-3 d-flex align-items-end">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1"
                @checked(old('is_active', $service?->is_active ?? true))>
            <label class="custom-control-label" for="is_active">Active</label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('services.index') }}" class="btn btn-light">Cancel</a>
    </div>
</div>
