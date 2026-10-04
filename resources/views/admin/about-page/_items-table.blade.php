<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="title mb-0">Items</h5>
    <a href="{{ route('about-page.items.create', ['section' => $key]) }}" class="btn btn-sm btn-primary">
        <em class="icon ni ni-plus"></em><span>Add Item</span>
    </a>
</div>
<div class="table-responsive border rounded">
    @if ($key === 'departments')
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($section->items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $item->title }}</strong></td>
                    <td>{{ \Illuminate\Support\Str::limit($item->description, 100) }}</td>
                    <td class="text-end">
                        <a href="{{ route('about-page.items.edit', $item) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="{{ route('about-page.items.destroy', $item) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Delete this department?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center py-4">No departments yet.</td></tr>
            @endforelse
        </tbody>
    </table>
    @else
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Type</th>
                <th>Icon</th>
                <th>Title</th>
                <th>Value</th>
                <th>Order</th>
                <th>Status</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($section->items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><span class="badge bg-light text-dark">{{ $item->type_label }}</span></td>
                    <td>
                        @if ($item->icon)
                            <img src="{{ $item->icon_url }}" alt="" width="40" height="40" style="object-fit:contain;background:#0B2B3F;padding:6px;border-radius:6px">
                        @endif
                    </td>
                    <td>
                        @if ($item->label)<div class="text-soft small">{{ $item->label }}</div>@endif
                        <strong>{{ $item->title }}</strong>
                        <div class="text-soft small">{{ \Illuminate\Support\Str::limit($item->description, 70) }}</div>
                    </td>
                    <td>{{ $item->number }}{{ $item->suffix }}</td>
                    <td>{{ $item->sort_order }}</td>
                    <td>
                        <span class="badge bg-{{ $item->is_active ? 'success' : 'secondary' }}">
                            {{ $item->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td class="text-end">
                        <a href="{{ route('about-page.items.edit', $item) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="{{ route('about-page.items.destroy', $item) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Delete this item?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="8" class="text-center py-4">No items yet.</td></tr>
            @endforelse
        </tbody>
    </table>
    @endif
</div>
