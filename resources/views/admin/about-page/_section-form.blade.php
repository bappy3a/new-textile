@php($config = $section->config())
@php($value = fn ($field) => $useOld ? old($field, $section->$field) : $section->$field)
<h5 class="title mb-3">Section Settings</h5>
<form action="{{ route('about-page.sections.update', $key) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row g-4">
        <div class="col-md-6">
            <label class="form-label" for="{{ $key }}_subtitle">Subtitle</label>
            <input type="text" class="form-control" id="{{ $key }}_subtitle" name="subtitle" value="{{ $value('subtitle') }}">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="{{ $key }}_title">Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="{{ $key }}_title" name="title" required value="{{ $value('title') }}">
        </div>
        <div class="col-12">
            <label class="form-label" for="{{ $key }}_description">Description</label>
            <textarea class="form-control" id="{{ $key }}_description" name="description" rows="3">{{ $value('description') }}</textarea>
        </div>

        @foreach ($config['images'] as $field => $label)
            <div class="col-md-4">
                <label class="form-label" for="{{ $key }}_{{ $field }}">{{ $label }}</label>
                <input type="file" class="form-control" id="{{ $key }}_{{ $field }}" name="{{ $field }}" accept="image/*">
                @if ($section->$field)
                    <img src="{{ $section->imageUrl($field) }}" alt="" class="rounded mt-2" style="height:80px">
                @endif
            </div>
        @endforeach

        @if (in_array('button', $config['fields']))
            <div class="col-md-6">
                <label class="form-label" for="{{ $key }}_button_text">Button Text</label>
                <input type="text" class="form-control" id="{{ $key }}_button_text" name="button_text" value="{{ $value('button_text') }}">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="{{ $key }}_button_url">Button URL</label>
                <input type="text" class="form-control" id="{{ $key }}_button_url" name="button_url" value="{{ $value('button_url') }}">
                <div class="form-note">Path (e.g. <code>contact-us</code>) or full URL.</div>
            </div>
        @endif

        @if (in_array('contact', $config['fields']))
            <div class="col-md-6">
                <label class="form-label" for="{{ $key }}_contact_label">Contact Text</label>
                <input type="text" class="form-control" id="{{ $key }}_contact_label" name="contact_label" value="{{ $value('contact_label') }}">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="{{ $key }}_contact_phone">Contact Phone</label>
                <input type="text" class="form-control" id="{{ $key }}_contact_phone" name="contact_phone" value="{{ $value('contact_phone') }}">
            </div>
        @endif

        <div class="col-12">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="{{ $key }}_is_active" name="is_active" value="1"
                    @checked($value('is_active'))>
                <label class="custom-control-label" for="{{ $key }}_is_active">Show this section on the About Us page</label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Save Section</button>
        </div>
    </div>
</form>
