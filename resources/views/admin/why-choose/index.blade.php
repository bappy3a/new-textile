@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Why Choose Us Items</h3>
                <p>Manage the feature items shown in the Why Choose Us section.</p>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('why-choose.section.edit') }}" class="btn btn-outline-primary me-1">
                    <em class="icon ni ni-edit"></em><span>Section Settings</span>
                </a>
                <a href="{{ route('why-choose.create') }}" class="btn btn-primary">
                    <em class="icon ni ni-plus"></em><span>Add Item</span>
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
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ $item->icon_url }}" alt="" width="40" height="40" style="object-fit:contain;background:#0B2B3F;padding:6px;border-radius:6px"></td>
                                    <td>
                                        <strong>{{ $item->title }}</strong>
                                        <div class="text-soft small">{{ \Illuminate\Support\Str::limit($item->description, 70) }}</div>
                                    </td>
                                    <td>{{ $item->sort_order }}</td>
                                    <td>
                                        <span class="badge bg-{{ $item->is_active ? 'success' : 'secondary' }}">
                                            {{ $item->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('why-choose.edit', $item) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form action="{{ route('why-choose.destroy', $item) }}" method="POST" class="d-inline"
                                            onsubmit="return confirm('Delete this item?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="6" class="text-center py-4">No items yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
