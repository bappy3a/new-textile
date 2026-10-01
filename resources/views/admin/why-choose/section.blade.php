@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">Why Choose Us Section Settings</h3>
        <p>Heading and images of the section. <a href="{{ route('why-choose.index') }}">&larr; Back to items</a></p>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('why-choose.section.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label" for="subtitle">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $section?->subtitle) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $section?->title) }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="image_1">Image 1 (large) @unless ($section)<span class="text-danger">*</span>@endunless</label>
                            <input type="file" class="form-control" id="image_1" name="image_1" accept="image/*" @unless ($section) required @endunless>
                            @if ($section)
                                <img src="{{ $section->image_1_url }}" alt="" class="rounded mt-2" style="height:80px">
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="image_2">Image 2 (top right) @unless ($section)<span class="text-danger">*</span>@endunless</label>
                            <input type="file" class="form-control" id="image_2" name="image_2" accept="image/*" @unless ($section) required @endunless>
                            @if ($section)
                                <img src="{{ $section->image_2_url }}" alt="" class="rounded mt-2" style="height:80px">
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="image_3">Image 3 (bottom right) @unless ($section)<span class="text-danger">*</span>@endunless</label>
                            <input type="file" class="form-control" id="image_3" name="image_3" accept="image/*" @unless ($section) required @endunless>
                            @if ($section)
                                <img src="{{ $section->image_3_url }}" alt="" class="rounded mt-2" style="height:80px">
                            @endif
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
