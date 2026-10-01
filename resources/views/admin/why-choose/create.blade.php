@extends('layouts.main')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <h3 class="nk-block-title page-title">Add Item</h3>
    </div>

    @include('admin.sliders._alerts')

    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('why-choose.store') }}" method="POST" enctype="multipart/form-data">
                    @include('admin.why-choose._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
