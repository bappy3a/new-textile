@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">Edit {{ $item->section_label }} Item</h3>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('about-page.items.update', $item) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @include('admin.about-page.items._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
