@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">Add Gallery Images</h3>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-4">
                            <label class="form-label" for="gallery_category_id">Category <span class="text-danger">*</span></label>
                            <select class="form-select" id="gallery_category_id" name="gallery_category_id" required>
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @selected((int) old('gallery_category_id') === $category->id)>
                                        {{ $category->name }}{{ $category->is_favorite ? ' (Favorite)' : '' }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="form-note"><a href="{{ route('gallery-categories.create') }}">Create a category</a> if the list is empty.</div>
                        </div>
                        <div class="col-md-8">
                            <label class="form-label" for="images">Images <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple required>
                            <div class="form-note">Select one or more JPG, PNG or WEBP files, max 4MB each. You can edit alt text and order afterwards.</div>
                        </div>
                        <div class="col-md-12 d-flex align-items-end">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" checked>
                                <label class="custom-control-label" for="is_active">Active</label>
                            </div>
                            <div class="custom-control custom-switch ms-4">
                                <input type="checkbox" class="custom-control-input" id="show_on_home" name="show_on_home" value="1" @checked(old('show_on_home'))>
                                <label class="custom-control-label" for="show_on_home">Show on Home Page</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Upload</button>
                            <a href="{{ route('gallery.index') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
