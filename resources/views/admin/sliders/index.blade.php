@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Sliders</h3>
                <p>Manage the hero slider shown on the home page.</p>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('sliders.create') }}" class="btn btn-primary">
                    <em class="icon ni ni-plus"></em><span>Add Slider</span>
                </a>
            </div>
        </div>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">
                <div class="card-inner p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Button</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sliders as $slider)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ $slider->image_url }}" alt="" width="90"
                                                class="rounded" style="height:55px;object-fit:cover">
                                        </td>
                                        <td>
                                            <strong>{{ $slider->title }}</strong>
                                            @if ($slider->subtitle)
                                                <div class="text-soft small">{{ $slider->subtitle }}</div>
                                            @endif
                                        </td>
                                        <td>{{ $slider->button_text ?: '—' }}</td>
                                        <td>{{ $slider->sort_order }}</td>
                                        <td>
                                            <span class="badge bg-{{ $slider->is_active ? 'success' : 'secondary' }}">
                                                {{ $slider->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ route('sliders.edit', $slider) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                            <form action="{{ route('sliders.destroy', $slider) }}" method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Delete this slider?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">No sliders yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
