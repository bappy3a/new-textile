@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">Add {{ \App\Models\AboutPageSection::SECTIONS[$section]['label'] }} Item</h3>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('about-page.items.store') }}" method="POST" enctype="multipart/form-data">
                    @include('admin.about-page.items._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
