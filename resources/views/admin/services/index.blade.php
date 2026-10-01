@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Services</h3>
                <p>Manage the services shown on the home page.</p>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('services.section.edit') }}" class="btn btn-outline-primary me-1">
                    <em class="icon ni ni-edit"></em><span>Section Settings</span>
                </a>
                <a href="{{ route('services.create') }}" class="btn btn-primary">
                    <em class="icon ni ni-plus"></em><span>Add Service</span>
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
                            @forelse ($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ $service->icon_url }}" alt="" width="40" height="40" style="object-fit:contain;background:#0B2B3F;padding:6px;border-radius:6px"></td>
                                    <td>
                                        <strong>{{ $service->title }}</strong>
                                        <div class="text-soft small">{{ \Illuminate\Support\Str::limit($service->description, 70) }}</div>
                                    </td>
                                    <td>{{ $service->sort_order }}</td>
                                    <td>
                                        <span class="badge bg-{{ $service->is_active ? 'success' : 'secondary' }}">
                                            {{ $service->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form action="{{ route('services.destroy', $service) }}" method="POST" class="d-inline"
                                            onsubmit="return confirm('Delete this service?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="6" class="text-center py-4">No services yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
