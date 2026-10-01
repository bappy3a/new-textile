@extends('layouts.master')

@section('content')

    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    @if ($section = $sections->get('about'))
    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-image-box wow fadeInUp">
                        <!-- About Us Image Box 1 Start -->
                        <div class="about-us-image-box-1">
                            <div class="about-us-image">
                                <figure class="image-anime">
                                    <img src="{{ $section->imageUrl('image_1') }}" alt="{{ $section->title }}">
                                </figure>
                            </div>
                        </div>
                        <!-- About Us Image Box 1 End -->

                        <!-- About Us Image Box 2 Start -->
                        <div class="about-us-image-box-2">
                            <!-- Learn More Circle Start -->
                            <div class="learn-more-circle">
                                <a href="{{ $section->button_link }}">
                                    <img src="{{ asset('frontend/images/contact-us-circle.svg') }}" alt="">
                                </a>
                            </div>
                            <!-- Learn More Circle End -->

                            <div class="about-us-image">
                                <figure class="image-anime">
                                    <img src="{{ $section->imageUrl('image_2') }}" alt="{{ $section->title }}">
                                </figure>
                            </div>
                        </div>
                        <!-- About Us Image Box 2 End -->
                    </div>
                    <!-- About Us Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ $section->subtitle }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $section->title }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $section->description }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            @if ($section->itemsOf('list')->isNotEmpty())
                            <!-- About Us List Start -->
                            <div class="about-us-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    @foreach ($section->itemsOf('list') as $item)
                                        <li>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- About Us List End -->
                            @endif

                            @if ($rating = $section->itemsOf('rating')->first())
                            <!-- About Us Counter Box Start -->
                            <div class="about-us-body-counter wow fadeInUp" data-wow-delay="0.4s">
                                <div class="about-us-counter-content">
                                    <h2><i class="fa-solid fa-star"></i> <span class="counter">{{ $rating->number }}</span> <sub>{{ $rating->suffix }}</sub></h2>
                                    <p>{{ $rating->title }}</p>
                                </div>
                                @if ($section->image_3)
                                <div class="about-us-counter-image">
                                    <figure>
                                        <img src="{{ $section->imageUrl('image_3') }}" alt="">
                                    </figure>
                                </div>
                                @endif
                            </div>
                            <!-- About Us Counter Box End -->
                            @endif

                            @if ($section->itemsOf('feature')->isNotEmpty())
                            <!-- About Us Item List Start -->
                            <div class="about-us-item-list wow fadeInUp" data-wow-delay="0.6s">
                                @foreach ($section->itemsOf('feature') as $item)
                                <div class="about-us-item">
                                    @if ($item->icon)
                                    <div class="icon-box">
                                        <img src="{{ $item->icon_url }}" alt="">
                                    </div>
                                    @endif
                                    <div class="about-us-item-content">
                                        <h3>{{ $item->title }}</h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- About Us Item List End -->
                            @endif
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                            @if ($section->button_text)
                            <div class="about-us-btn">
                                <a href="{{ $section->button_link }}" class="btn-default">{{ $section->button_text }}</a>
                            </div>
                            @endif

                            @if ($section->contact_phone)
                            <!-- Contact Now Box Start -->
                            <div class="about-contact-box">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-headset.svg') }}" alt="">
                                </div>
                                <div class="about-contact-box-content">
                                    <p>{{ $section->contact_label }}</p>
                                    <h3><a href="{{ $section->phone_link }}">{{ $section->contact_phone }}</a></h3>
                                </div>
                            </div>
                            <!-- Contact Now Box End -->
                            @endif
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->
    @endif

    @if ($section = $sections->get('approach'))
    <!-- Our Approach Section Start -->
    <div class="our-approach bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Approach Image Box Start -->
                    <div class="approach-image-box">
                        <div class="approach-image-box-1">
                            <div class="approach-image-1">
                                <figure>
                                    <img src="{{ $section->imageUrl('image_1') }}" alt="{{ $section->title }}">
                                </figure>
                            </div>
                        </div>

                        <div class="approach-image-box-2">
                            <div class="approach-image-2">
                                <figure class="image-anime reveal">
                                    <img src="{{ $section->imageUrl('image_2') }}" alt="{{ $section->title }}">
                                </figure>
                            </div>

                            @if ($counter = $section->itemsOf('counter')->first())
                            <!-- Approach Counter Item Start -->
                            <div class="approach-counter-item">
                                @if ($counter->icon)
                                <div class="icon-box">
                                    <img src="{{ $counter->icon_url }}" alt="">
                                </div>
                                @endif
                                <div class="approach-counter-item-content">
                                    <h2><span class="counter">{{ $counter->number }}</span>{{ $counter->suffix }}</h2>
                                    <p>{{ $counter->title }}</p>
                                </div>
                            </div>
                            <!-- Approach Counter Item End -->
                            @endif
                        </div>
                    </div>
                    <!-- Approach Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- Our Approach Content Start -->
                    <div class="our-approach-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ $section->subtitle }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $section->title }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $section->description }}</p>
                        </div>

                        <!-- Approach Items List Start -->
                        <div class="approach-items-list">
                            @foreach ($section->itemsOf('feature') as $item)
                            <div class="approach-item wow fadeInUp" data-wow-delay="{{ 0.4 + $loop->index * 0.2 }}s">
                                @if ($item->icon)
                                <div class="icon-box">
                                    <img src="{{ $item->icon_url }}" alt="">
                                </div>
                                @endif
                                <div class="approach-item-content">
                                    <h3>{{ $item->title }}</h3>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Approach Items List End -->
                    </div>
                    <!-- Our Approach Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->
    @endif

    @if ($section = $sections->get('why_choose'))
    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Why Choose Us Content Start -->
                    <div class="why-choose-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ $section->subtitle }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $section->title }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $section->description }}</p>
                        </div>

                        @if ($section->itemsOf('list')->isNotEmpty())
                        <div class="why-choose-us-body wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                @foreach ($section->itemsOf('list') as $item)
                                    <li>{{ $item->title }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Why Choose Us List Start -->
                        <div class="why-choose-item-list wow fadeInUp">
                            @foreach ($section->itemsOf('counter') as $item)
                            <div class="why-choose-item {{ $loop->first ? 'highlighted-box' : '' }}">
                                @if ($item->label)
                                <div class="why-choose-item-header">
                                    <ul>
                                        <li>{{ $item->label }}</li>
                                    </ul>
                                </div>
                                @endif
                                <div class="why-choose-item-content">
                                    <h2><span class="counter">{{ $item->number }}</span>{{ $item->suffix }}</h2>
                                    <h3>{{ $item->title }}</h3>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Why Choose Us List End -->
                    </div>
                    <!-- Why Choose Us Content End -->
                </div>

                <div class="col-xl-6">
                    <div class="why-choose-us-image wow fadeInUp" data-wow-delay="0.2s">
                        <figure>
                            <img src="{{ $section->imageUrl('image_1') }}" alt="{{ $section->title }}">
                        </figure>
                    </div>
                </div>

                @if ($section->contact_label || $section->contact_phone)
                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.4s">
                        <div class="satisfy-client-images">
                            @if ($section->image_2)
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{ $section->imageUrl('image_2') }}" alt="">
                                </figure>
                            </div>
                            @endif
                            <div class="satisfy-client-image add-more">
                                <img src="{{ asset('frontend/images/icon-phone-primary.svg') }}" alt="">
                            </div>
                        </div>
                        <p>{{ $section->contact_label }}
                            @if ($section->contact_phone)
                                - <a href="{{ $section->phone_link }}">Call Us: {{ $section->contact_phone }}</a>
                            @endif
                        </p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->
    @endif

    @if ($section = $sections->get('what_we_do'))
    <!-- What We Do Section Start -->
    <div class="what-we-do bg-section dark-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="what-we-do-box">
                        <div class="what-we-do-image">
                            <figure class="image-anime">
                                <img src="{{ $section->imageUrl('image_1') }}" alt="{{ $section->title }}">
                            </figure>
                        </div>

                        <div class="what-we-do-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ $section->subtitle }}</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $section->title }}</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $section->description }}</p>
                            </div>

                            <!-- What We Body Start -->
                            <div class="what-we-body wow fadeInUp" data-wow-delay="0.4s">
                                @foreach ($section->itemsOf('feature') as $item)
                                <div class="what-we-body-item">
                                    @if ($item->icon)
                                    <div class="icon-box">
                                        <img src="{{ $item->icon_url }}" alt="">
                                    </div>
                                    @endif
                                    <div class="what-we-body-item-content">
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- What We Body End -->

                            <!-- What We Counters List Start -->
                            <div class="what-we-counters-list wow fadeInUp">
                                @foreach ($section->itemsOf('counter') as $item)
                                <div class="what-we-counter-item">
                                    @if ($item->icon)
                                    <div class="icon-box">
                                        <img src="{{ $item->icon_url }}" alt="">
                                    </div>
                                    @endif
                                    <div class="what-we-counter-item-content">
                                        <h2><span class="counter">{{ $item->number }}</span>{{ $item->suffix }}</h2>
                                        <p>{{ $item->title }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- What We Counters List End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->
    @endif

    @if ($section = $sections->get('awards'))
    <!-- Our Awards Section Start -->
    <div class="our-awards">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="our-awards-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ $section->subtitle }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $section->title }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $section->description }}</p>
                        </div>

                        @if ($section->button_text)
                        <div class="awards-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ $section->button_link }}" class="btn-default">{{ $section->button_text }}</a>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="col-xl-6">
                    <!-- Awards Items List Start -->
                    <div class="awards-items-list">
                        @foreach ($section->itemsOf('award') as $item)
                        <div class="awards-item wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                            <div class="awards-item-no">
                                <h3>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</h3>
                            </div>
                            <div class="awards-item-body">
                                @if ($item->icon)
                                <div class="awards-item-image">
                                    <img src="{{ $item->icon_url }}" alt="">
                                </div>
                                @endif
                                <div class="awards-item-content">
                                    <h3>{{ $item->title }}</h3>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Awards Items List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Awards Section End -->
    @endif

    @if ($section = $sections->get('faqs'))
    <!-- Our FAQs Section Start -->
    <div class="our-faqs bg-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="our-faqs-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ $section->subtitle }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $section->title }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $section->description }}</p>
                        </div>

                        <div class="contact-us-circle">
                            <a href="{{ $section->button_link }}">
                                <img src="{{ asset('frontend/images/contact-us-circle.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="faqaccordion">
                        @foreach ($section->itemsOf('faq') as $item)
                        <div class="accordion-item wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                            <h2 class="accordion-header" id="heading{{ $item->id }}">
                                <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $item->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $item->id }}">
                                    Q{{ $loop->iteration }}. {{ $item->title }}
                                </button>
                            </h2>
                            <div id="collapse{{ $item->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                aria-labelledby="heading{{ $item->id }}" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQs Section End -->
    @endif

@endsection
