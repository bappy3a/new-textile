@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Gallery</h3>
                <p>Manage gallery images. Turn on "Show on Home" to display an image on the home page.</p>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('gallery-categories.index') }}" class="btn btn-outline-primary me-1">
                    <em class="icon ni ni-list"></em><span>Categories</span>
                </a>
                <a href="{{ route('gallery.create') }}" class="btn btn-primary">
                    <em class="icon ni ni-plus"></em><span>Add Images</span>
                </a>
            </div>
        </div>
    </div>

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('gallery.index') }}" method="GET" class="row g-3 align-items-end">
                    <div class="col-md-5">
                        <label class="form-label" for="category">Filter by Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="">All categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected($selectedCategoryId === $category->id)>
                                    {{ $category->name }}{{ $category->is_favorite ? ' (Favorite)' : '' }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Filter</button>
                        <a href="{{ route('gallery.index') }}" class="btn btn-light">Reset</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <h6 class="mb-3">Section Heading</h6>
                <form action="{{ route('gallery.section.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label" for="subtitle">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $section?->subtitle) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $section?->title) }}">
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Alt Text</th>
                                <th>Category</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Home Page</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($images as $image)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ $image->image_url }}" alt="" width="90" class="rounded" style="height:55px;object-fit:cover"></td>
                                    <td>{{ $image->alt_text ?: '—' }}</td>
                                    <td>
                                        {{ $image->category?->name ?? 'Uncategorized' }}
                                        @if ($image->category?->is_favorite)
                                            <span class="badge bg-warning text-dark">Favorite</span>
                                        @endif
                                    </td>
                                    <td>{{ $image->sort_order }}</td>
                                    <td>
                                        <span class="badge bg-{{ $image->is_active ? 'success' : 'secondary' }}">
                                            {{ $image->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $image->show_on_home ? 'info' : 'light text-dark' }}">
                                            {{ $image->show_on_home ? 'Shown' : 'Hidden' }}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('gallery.edit', $image) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form action="{{ route('gallery.destroy', $image) }}" method="POST" class="d-inline"
                                            onsubmit="return confirm('Delete this image?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="8" class="text-center py-4">No images found.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
