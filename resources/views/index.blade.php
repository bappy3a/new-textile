@extends('layouts.master')

@section('content')

    @if ($sliders->isNotEmpty())
    <div class="hero-slider swiper">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="hero-metal bg-section dark-section"
                        style="background-image: url('{{ $slider->image_url }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="hero-content-metal">
                                        <div class="section-title">
                                            @if ($slider->subtitle)
                                                <h3>{{ $slider->subtitle }}</h3>
                                            @endif
                                            <h1>{{ $slider->title }}</h1>
                                            @if ($slider->description)
                                                <p>{{ $slider->description }}</p>
                                            @endif
                                        </div>
                                        @if ($slider->button_text)
                                            <div class="hero-btn-metal">
                                                <a href="{{ $slider->button_url ? url($slider->button_url) : url('contact') }}"
                                                    class="btn-default btn-highlighted">
                                                    {{ $slider->button_text }}
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="hero-slider-controls">
            <div class="container">
                <div class="hero-slider-controls-inner">
                    <div class="hero-slider-pagination"></div>
                    <div class="hero-slider-arrows">
                        <button type="button" class="hero-slider-prev" aria-label="Previous slide">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </button>
                        <button type="button" class="hero-slider-next" aria-label="Next slide">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($heroInfo)
    <div class="hero-info-section bg-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- Hero Info List Start -->
                    <div class="hero-info-list-metal wow fadeInUp">
                        <!-- Hero Info Image Item Start -->
                        <div class="hero-info-image-item-metal">
                            <!-- Hero Info Image Start -->
                            <div class="hero-info-image-metal">
                                <img src="{{ $heroInfo->image_url }}" alt="{{ $heroInfo->item_title }}">
                            </div>
                            <!-- Hero Info Image End -->
                            <!-- Hero Info Item Body Start -->
                            <div class="hero-info-item-body-metal">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-hero-info-item-metal.svg') }}"
                                        alt="Textile Solutions">
                                </div>
                                <div class="hero-info-item-content-metal">
                                    <h3>{{ $heroInfo->item_title }}</h3>
                                    <p>{{ $heroInfo->item_text }}</p>
                                </div>
                            </div>
                            <!-- Hero Info Item Body End -->
                        </div>
                        <!-- Hero Info Image Item End -->
                        <!-- Hero Info Counter Box Start -->
                        <div class="hero-info-counter-box-metal dark-box">
                            <h2><span class="counter">{{ $heroInfo->counter_1_number }}</span>{{ $heroInfo->counter_1_suffix }}</h2>
                            <p>{{ $heroInfo->counter_1_label }}</p>
                        </div>
                        <!-- Hero Info Counter Box End -->
                        <!-- Hero Info Counter Box Start -->
                        <div class="hero-info-counter-box-metal">
                            <h2><span class="counter">{{ $heroInfo->counter_2_number }}</span>{{ $heroInfo->counter_2_suffix }}</h2>
                            <p>{{ $heroInfo->counter_2_label }}</p>
                        </div>
                        <!-- Hero Info Counter Box End -->
                        <!-- Hero Info Contact Box Start -->
                        <div class="hero-info-contact-box-metal">
                            <!-- Hero Info Contact Header Start -->
                            <div class="hero-info-contact-header-metal">
                                <div class="hero-info-contact-title-metal">
                                    <h3>{{ $heroInfo->contact_title }}</h3>
                                </div>
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-headset.svg') }}" alt="Contact Us">
                                </div>
                            </div>
                            <!-- Hero Info Contact Header End -->
                            <!-- Hero Info Contact Body Start -->
                            <div class="hero-info-contact-body-metal">
                                <!-- Hero Info Contact Item Start -->
                                <div class="hero-info-contact-item-metal">
                                    <p>E-mail Us</p>
                                    <h3>
                                        <a href="mailto:{{ $heroInfo->contact_email }}">
                                            {{ $heroInfo->contact_email }}
                                        </a>
                                    </h3>
                                </div>
                                <!-- Hero Info Contact Item End -->
                                <!-- Hero Info Contact Item Start -->
                                <div class="hero-info-contact-item-metal">
                                    <p>Need Help!</p>
                                    <h3>
                                        <a href="{{ $heroInfo->phone_link }}">
                                            {{ $heroInfo->contact_phone }}
                                        </a>
                                    </h3>
                                </div>
                                <!-- Hero Info Contact Item End -->
                            </div>
                            <!-- Hero Info Contact Body End -->
                        </div>
                        <!-- Hero Info Contact Box End -->
                    </div>
                    <!-- Hero Info List End -->
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($about)
    <div class="about-us-metal">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- About Images Boxes Start -->
                    <div class="about-images-boxes-metal">
                        <!-- About Us Image Box Start -->
                        <div class="about-us-image-box-metal-1">
                            <!-- About Us Image Start -->
                            <div class="about-us-image-metal">
                                <figure class="image-anime reveal">
                                    <img src="{{ $about->image_1_url }}" alt="{{ $about->title }}">
                                </figure>
                            </div>
                            <!-- About Us Image End -->
                            <!-- About Image Content Counter Start -->
                            <div class="about-us-image-counter-metal">
                                <h2><span class="counter">{{ $about->counter_number }}</span>{{ $about->counter_suffix }}</h2>
                                <p>{{ $about->counter_label }}</p>
                            </div>
                            <!-- About Image Content Counter End -->
                        </div>
                        <!-- About Us Image Box End -->
                        <!-- About Us Image Box Start -->
                        <div class="about-us-image-box-metal-2">
                            <!-- About Us Image Start -->
                            <div class="about-us-image-metal">
                                <figure class="image-anime reveal">
                                    <img src="{{ $about->image_2_url }}" alt="{{ $about->title }}">
                                </figure>
                            </div>
                            <!-- About Us Image End -->
                        </div>
                        <!-- About Us Image Box End -->
                    </div>
                    <!-- About Images Boxes End -->
                </div>
                <div class="col-xl-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content-metal">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ $about->subtitle }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">
                                {{ $about->title }}
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                {{ $about->description }}
                            </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- About Us Item List Start -->
                        <div class="about-us-item-list-metal">
                            <!-- About Us Item Start -->
                            <div class="about-us-item-metal wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-about-item-metal.svg') }}"
                                        alt="Skilled Workforce">
                                </div>
                                <div class="about-us-item-content-metal">
                                    <h3>{{ $about->item_title }}</h3>
                                </div>
                            </div>
                            <!-- About Us Item End -->
                        </div>
                        <!-- About Us Item List End -->
                        <!-- About Us Footer Start -->
                        <div class="about-us-footer-metal wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Us Button Start -->
                            <div class="about-us-btn-metal">
                                <a href="{{ $about->button_url ? url($about->button_url) : url('about') }}" class="btn-default">
                                    {{ $about->button_text }}
                                </a>
                            </div>
                            <!-- About Us Button End -->
                            <!-- About Contact Box Start -->
                            <div class="about-contact-box-metal">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-headset.svg') }}" alt="Contact Us">
                                </div>
                                <div class="about-contact-box-content-metal">
                                    <p>{{ $about->contact_label }}</p>
                                    <h3>
                                        <a href="{{ $about->phone_link }}">
                                            {{ $about->contact_phone }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            <!-- About Contact Box End -->
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($serviceSection || $services->isNotEmpty())
    <div class="our-services-metal bg-section">
        <div class="container">
            @if ($serviceSection)
                <div class="row section-row">
                    <div class="col-xl-12">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">{{ $serviceSection->subtitle }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">
                                {{ $serviceSection->title }}
                            </h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
            @endif
            <div class="row services-item-list-metal">
                @foreach ($services as $service)
                    <div class="col-xl-3 col-md-6">
                        <div class="service-item-metal {{ $loop->first ? 'active wow fadeInUp' : 'wow fadeInUp' }}"
                            @unless ($loop->first) data-wow-delay="{{ number_format(($loop->index) * 0.2, 1) }}s" @endunless>
                            <div class="icon-box">
                                <img src="{{ $service->icon_url }}" alt="{{ $service->title }}">
                            </div>
                            <div class="services-item-body-metal">
                                <div class="services-item-content-metal">
                                    <h3>
                                        <a href="{{ url($service->link_url ?: 'services') }}">{{ $service->title }}</a>
                                    </h3>
                                    <p>{{ $service->description }}</p>
                                </div>
                                {{-- <div class="services-btn-metal">
                                    <a href="{{ url($service->link_url ?: 'services') }}" class="readmore-btn">
                                        View Details
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                @if ($serviceSection && $serviceSection->footer_text)
                    <!-- Section Footer Text Start -->
                    <div class="col-lg-12">
                        <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                            <p>
                                @if ($serviceSection->footer_badge)
                                    <span>{{ $serviceSection->footer_badge }}</span>
                                @endif
                                {{ $serviceSection->footer_text }}
                                @if ($serviceSection->footer_link_text)
                                    <a href="{{ url($serviceSection->footer_link_url ?: 'contact') }}">{{ $serviceSection->footer_link_text }}</a>
                                @endif
                            </p>
                        </div>
                    </div>
                    <!-- Section Footer Text End -->
                @endif
            </div>
        </div>
    </div>
    @endif

    @if ($gallerySection || $galleryImages->isNotEmpty())
    <div class="page-gallery">
        <div class="container">
            @if ($gallerySection)
                <div class="row section-row">
                    <div class="col-xl-12">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">{{ $gallerySection->subtitle }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">
                                {{ $gallerySection->title }}
                            </h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
            @endif
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                @foreach ($galleryImages as $galleryImage)
                    <div class="col-lg-4 col-6">
                        <!-- Image Gallery start -->
                        <div class="photo-gallery wow fadeInUp"
                            @if ($loop->index) data-wow-delay="{{ $loop->index * 0.2 }}s" @endif>
                            <a href="{{ $galleryImage->image_url }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ $galleryImage->image_url }}" alt="{{ $galleryImage->alt_text }}">
                                </figure>
                            </a>
                        </div>
                        <!-- Image Gallery end -->
                    </div>
                @endforeach
            </div>
            <!-- gallery section end -->
        </div>
    </div>
    @endif

    @if ($whyChoose)
    <div class="why-choose-us-metal bg-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Why Choose Images Boxes Start -->
                    <div class="why-choose-images-boxes-metal wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Why Choose Image Box Start -->
                        <div class="why-choose-image-box-1-metal">
                            <!-- Why Choose Image Start -->
                            <div class="why-choose-image-metal">
                                <figure class="image-anime">
                                    <img src="{{ $whyChoose->image_1_url }}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Image End -->
                        </div>
                        <!-- Why Choose Image Box End -->
                        <!-- Why Choose Image Box Start -->
                        <div class="why-choose-image-box-2-metal">
                            <!-- Why Choose Image Start -->
                            <div class="why-choose-image-metal box-1">
                                <figure class="image-anime">
                                    <img src="{{ $whyChoose->image_2_url }}" alt="">
                                </figure>
                                <!-- Contact Us Circle Start -->
                                <div class="contact-us-circle-metal">
                                    <a href="{{ url('contact') }}">
                                        <img src="{{ asset('frontend/images/contact-us-circle.svg') }}" alt="">
                                    </a>
                                </div>
                                <!-- Contact Us Circle End -->
                            </div>
                            <!-- Why Choose Image End -->
                            <!-- Why Choose Image Start -->
                            <div class="why-choose-image-metal box-2">
                                <figure class="image-anime">
                                    <img src="{{ $whyChoose->image_3_url }}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Image End -->
                        </div>
                        <!-- Why Choose Image Box End -->
                    </div>
                    <!-- Why Choose Images Boxes End -->
                </div>
                <div class="col-xl-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content-metal">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ $whyChoose->subtitle }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $whyChoose->title }}</h2>
                        </div>
                        <!-- Section Title End -->
                        <!-- Why Choose Items List Start -->
                        <div class="why-choose-items-list-metal wow fadeInUp">
                            @foreach ($whyChooseItems as $item)
                                <!-- Why Choose Item Start -->
                                <div class="why-choose-item-metal @if ($loop->index) wow fadeInUp @endif"
                                    @if ($loop->index) data-wow-delay="{{ number_format(($loop->index - 1) * 0.2 + 0.2, 1) }}s" @endif>
                                    <div class="icon-box">
                                        <img src="{{ $item->icon_url }}" alt="">
                                    </div>
                                    <div class="why-choose-item-content-metal">
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                                <!-- Why Choose Item End -->
                            @endforeach
                        </div>
                        <!-- Why Choose Items List End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>
            </div>
        </div>
    </div>
    @endif



    @if ($sliders->isNotEmpty())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.hero-slider', {
                loop: {{ $sliders->count() > 1 ? 'true' : 'false' }},
                speed: 900,
                effect: 'fade',
                fadeEffect: { crossFade: true },
                autoplay: { delay: 5000, disableOnInteraction: false },
                pagination: { el: '.hero-slider-pagination', clickable: true },
                navigation: { nextEl: '.hero-slider-next', prevEl: '.hero-slider-prev' },
            });
        });
    </script>
    @endif

@endsection
