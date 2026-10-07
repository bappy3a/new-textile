@extends('layouts.master')


@section('content')
    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">
                            {{ $selectedCategory ? $selectedCategory->name : 'Our products' }}
                        </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $selectedCategory ? $selectedCategory->name : 'products' }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Photo Gallery Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                @forelse ($galleryImages as $galleryImage)
                    <div class="col-lg-4 col-6">
                        <div class="photo-gallery wow fadeInUp"
                            @if ($loop->index) data-wow-delay="{{ $loop->index * 0.2 }}s" @endif>
                            <a href="{{ $galleryImage->image_url }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ $galleryImage->image_url }}" alt="{{ $galleryImage->alt_text }}">
                                </figure>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No products found in this category.</p>
                    </div>
                @endforelse
            </div>
            <!-- gallery section end -->

            {{-- Kept outside .gallery-items so the lightbox doesn't treat page links as images --}}
            @if ($galleryImages->hasPages())
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-pagination wow fadeInUp">
                            {{ $galleryImages->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Photo Gallery End -->
@endsection
