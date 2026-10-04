@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Gallery Categories</h3>
                <p>Organize gallery images and mark important categories as favorites.</p>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('gallery.index') }}" class="btn btn-light me-1">Back to Gallery</a>
                <a href="{{ route('gallery-categories.create') }}" class="btn btn-primary">
                    <em class="icon ni ni-plus"></em><span>Add Category</span>
                </a>
            </div>
        </div>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Favorite</th>
                                <th>Images</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><strong>{{ $category->name }}</strong></td>
                                    <td>
                                        <span class="badge bg-{{ $category->is_favorite ? 'warning text-dark' : 'light text-dark' }}">
                                            {{ $category->is_favorite ? 'Favorite' : 'No' }}
                                        </span>
                                    </td>
                                    <td>{{ $category->images_count }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('gallery-categories.edit', $category) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form action="{{ route('gallery-categories.destroy', $category) }}" method="POST" class="d-inline"
                                            onsubmit="return confirm('Delete this category? Its images will become uncategorized.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="5" class="text-center py-4">No categories yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
