@php($item = $item ?? null)
@php($types = \App\Models\AboutPageSection::SECTIONS[$section]['types'])
@csrf
<input type="hidden" name="section" value="{{ $section }}">
@if ($section === 'departments')
<div class="row g-4">
    <div class="col-12">
        <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="title" name="title" required
            value="{{ old('title', $item?->title) }}">
    </div>
    <div class="col-12">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $item?->description) }}</textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('about-page.index', ['tab' => $section]) }}" class="btn btn-light">Cancel</a>
    </div>
</div>
@else
<div class="row g-4">
    <div class="col-md-4">
        <label class="form-label" for="type">Type <span class="text-danger">*</span></label>
        <select class="form-select form-control" id="type" name="type" required>
            @foreach ($types as $value => $label)
                <option value="{{ $value }}" @selected(old('type', $item?->type) === $value)>{{ $label }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-8">
        <label class="form-label" for="title">Title / Question <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="title" name="title" required
            value="{{ old('title', $item?->title) }}">
    </div>
    <div class="col-12">
        <label class="form-label" for="description">Description / Answer</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $item?->description) }}</textarea>
        <div class="form-note">Not used by bullet points, ratings and simple counters.</div>
    </div>
    <div class="col-md-4">
        <label class="form-label" for="number">Counter Number</label>
        <input type="text" class="form-control" id="number" name="number" value="{{ old('number', $item?->number) }}">
        <div class="form-note">Counters / ratings only, e.g. <code>25</code> or <code>4.9</code>.</div>
    </div>
    <div class="col-md-4">
        <label class="form-label" for="suffix">Counter Suffix</label>
        <input type="text" class="form-control" id="suffix" name="suffix" value="{{ old('suffix', $item?->suffix) }}">
        <div class="form-note">e.g. <code>+</code>, <code>%</code>, <code>k+</code>.</div>
    </div>
    <div class="col-md-4">
        <label class="form-label" for="label">Header Label</label>
        <input type="text" class="form-control" id="label" name="label" value="{{ old('label', $item?->label) }}">
        <div class="form-note">Why Choose Us counter cards only.</div>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="icon">Icon / Image</label>
        <input type="file" class="form-control" id="icon" name="icon" accept=".svg,.png,.webp,.jpg,.jpeg">
        <div class="form-note">SVG or PNG, max 1MB.</div>
        @if ($item?->icon)
            <img src="{{ $item->icon_url }}" alt="" width="50" class="mt-2" style="background:#0B2B3F;padding:8px;border-radius:6px">
            <div class="custom-control custom-checkbox mt-1">
                <input type="checkbox" class="custom-control-input" id="remove_icon" name="remove_icon" value="1">
                <label class="custom-control-label" for="remove_icon">Remove icon</label>
            </div>
        @endif
    </div>
    <div class="col-md-3">
        <label class="form-label" for="sort_order">Sort Order</label>
        <input type="number" min="0" class="form-control" id="sort_order" name="sort_order"
            value="{{ old('sort_order', $item?->sort_order ?? 0) }}">
    </div>
    <div class="col-md-3 d-flex align-items-end">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1"
                @checked(old('is_active', $item?->is_active ?? true))>
            <label class="custom-control-label" for="is_active">Active</label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('about-page.index', ['tab' => $section]) }}" class="btn btn-light">Cancel</a>
    </div>
</div>
@endif
