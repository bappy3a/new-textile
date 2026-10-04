@php($galleryCategory = $galleryCategory ?? null)
@csrf
<div class="row g-4">
    <div class="col-md-8">
        <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" required maxlength="255"
            value="{{ old('name', $galleryCategory?->name) }}">
    </div>
    <div class="col-md-4 d-flex align-items-end">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="is_favorite" name="is_favorite" value="1"
                @checked(old('is_favorite', $galleryCategory?->is_favorite ?? false))>
            <label class="custom-control-label" for="is_favorite">Favorite Category</label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('gallery-categories.index') }}" class="btn btn-light">Cancel</a>
    </div>
</div>
