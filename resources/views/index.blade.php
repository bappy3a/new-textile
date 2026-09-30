@extends('layouts.master')

@section('content')

    <div class="hero-metal bg-section dark-section parallaxie"
        style="background-image: url('{{ asset('frontend/images/hero-bg-image.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <!-- Hero Content Start -->
                    <div class="hero-content-metal">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Welcome to Textile Industry</h3>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">
                                Redefining excellence through modern textile innovation
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                We combine advanced technology, skilled craftsmanship, and sustainable practices
                                to create high-quality fabrics that set new benchmarks in the global textile industry.
                            </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- Hero Button Start -->
                        <div class="hero-btn-metal wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ url('contact') }}" class="btn-default btn-highlighted">
                                Begin Your Fabric Journey
                            </a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>

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
                                <img src="{{ asset('frontend/images/hero-info-image-metal.jpg') }}" alt="Textile Industry">
                            </div>
                            <!-- Hero Info Image End -->
                            <!-- Hero Info Item Body Start -->
                            <div class="hero-info-item-body-metal">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-hero-info-item-metal.svg') }}"
                                        alt="Textile Solutions">
                                </div>
                                <div class="hero-info-item-content-metal">
                                    <h3>Customized Textile Solutions</h3>
                                    <p>
                                        We provide tailor-made fabric designs, textures, and finishes
                                        to perfectly match your brand's vision.
                                    </p>
                                </div>
                            </div>
                            <!-- Hero Info Item Body End -->
                        </div>
                        <!-- Hero Info Image Item End -->
                        <!-- Hero Info Counter Box Start -->
                        <div class="hero-info-counter-box-metal dark-box">
                            <h2><span class="counter">25</span>+</h2>
                            <p>Years of Excellence in Textile Industry</p>
                        </div>
                        <!-- Hero Info Counter Box End -->
                        <!-- Hero Info Counter Box Start -->
                        <div class="hero-info-counter-box-metal">
                            <h2><span class="counter">5</span>K+</h2>
                            <p>Meters Produced Monthly Textile Innovations</p>
                        </div>
                        <!-- Hero Info Counter Box End -->
                        <!-- Hero Info Contact Box Start -->
                        <div class="hero-info-contact-box-metal">
                            <!-- Hero Info Contact Header Start -->
                            <div class="hero-info-contact-header-metal">
                                <div class="hero-info-contact-title-metal">
                                    <h3>Let's Weave Success Together - Contact Us Today</h3>
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
                                        <a href="mailto:info@example.com">
                                            info@example.com
                                        </a>
                                    </h3>
                                </div>
                                <!-- Hero Info Contact Item End -->
                                <!-- Hero Info Contact Item Start -->
                                <div class="hero-info-contact-item-metal">
                                    <p>Need Help!</p>
                                    <h3>
                                        <a href="tel:+880123456789">
                                            +880 123 456 789
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
                                    <img src="{{ asset('frontend/images/about-us-image-metal-1.jpg') }}"
                                        alt="About Our Textile Industry">
                                </figure>
                            </div>
                            <!-- About Us Image End -->
                            <!-- About Image Content Counter Start -->
                            <div class="about-us-image-counter-metal">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Years Of Experience Textile</p>
                            </div>
                            <!-- About Image Content Counter End -->
                        </div>
                        <!-- About Us Image Box End -->
                        <!-- About Us Image Box Start -->
                        <div class="about-us-image-box-metal-2">
                            <!-- About Us Image Start -->
                            <div class="about-us-image-metal">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('frontend/images/about-us-image-metal-2.jpg') }}"
                                        alt="Textile Manufacturing">
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
                            <h3 class="wow fadeInUp">About Us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">
                                Delivering excellence through textile expertise
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                With years of industry experience, we combine skilled craftsmanship,
                                modern technology, quality materials to produce premium textiles
                                that meet global standards.
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
                                    <h3>Skilled & Experienced Workforce</h3>
                                </div>
                            </div>
                            <!-- About Us Item End -->
                        </div>
                        <!-- About Us Item List End -->
                        <!-- About Us Footer Start -->
                        <div class="about-us-footer-metal wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Us Button Start -->
                            <div class="about-us-btn-metal">
                                <a href="{{ url('about') }}" class="btn-default">
                                    More About Us
                                </a>
                            </div>
                            <!-- About Us Button End -->
                            <!-- About Contact Box Start -->
                            <div class="about-contact-box-metal">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-headset.svg') }}" alt="Contact Us">
                                </div>
                                <div class="about-contact-box-content-metal">
                                    <p>Need Any Help?</p>
                                    <h3>
                                        <a href="tel:+123456789">
                                            +(123) 456-789
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

    <div class="our-services-metal bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Services</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Expert fabric design, production, and finishing services
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row services-item-list-metal">
                <!-- Service 1 -->
                <div class="col-xl-3 col-md-6">
                    <div class="service-item-metal active wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-services-1-metal.svg') }}" alt="Fabric Development">
                        </div>
                        <div class="services-item-body-metal">
                            <div class="services-item-content-metal">
                                <h3>
                                    <a href="{{ url('services') }}">Fabric Development</a>
                                </h3>
                                <p>
                                    High-quality fabric production using advanced weaving and knitting technology.
                                </p>
                            </div>
                            <div class="services-btn-metal">
                                <a href="{{ url('services') }}" class="readmore-btn">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-xl-3 col-md-6">
                    <div class="service-item-metal wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-services-2-metal.svg') }}"
                                alt="Custom Fabric Solutions">
                        </div>
                        <div class="services-item-body-metal">
                            <div class="services-item-content-metal">
                                <h3>
                                    <a href="{{ url('services') }}">Custom Fabric Solutions</a>
                                </h3>
                                <p>
                                    High-quality fabric production using advanced weaving and knitting technology.
                                </p>
                            </div>
                            <div class="services-btn-metal">
                                <a href="{{ url('services') }}" class="readmore-btn">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-xl-3 col-md-6">
                    <div class="service-item-metal wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-services-3-metal.svg') }}" alt="Quality Assurance">
                        </div>
                        <div class="services-item-body-metal">
                            <div class="services-item-content-metal">
                                <h3>
                                    <a href="{{ url('services') }}">Quality Assurance</a>
                                </h3>
                                <p>
                                    High-quality fabric production using advanced weaving and knitting technology.
                                </p>
                            </div>
                            <div class="services-btn-metal">
                                <a href="{{ url('services') }}" class="readmore-btn">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-xl-3 col-md-6">
                    <div class="service-item-metal wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-services-4-metal.svg') }}"
                                alt="Sustainable Production">
                        </div>
                        <div class="services-item-body-metal">
                            <div class="services-item-content-metal">
                                <h3>
                                    <a href="{{ url('services') }}">Sustainable Production</a>
                                </h3>
                                <p>
                                    High-quality fabric production using advanced weaving and knitting technology.
                                </p>
                            </div>
                            <div class="services-btn-metal">
                                <a href="{{ url('services') }}" class="readmore-btn">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Footer Text Start -->
                <div class="col-lg-12">
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p>
                            <span>Free</span>
                            Let's make something great work together.
                            <a href="{{ url('contact') }}">Get Free Quote</a>
                        </p>
                    </div>
                </div>
                <!-- Section Footer Text End -->
            </div>
        </div>
    </div>

    <div class="page-gallery">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Services</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Expert fabric design, production, and finishing services
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp">
                        <a href="{{ asset('frontend/images/gallery-1.jpg') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery-1.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ asset('frontend/images/gallery-2.jpg') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery-2.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ asset('frontend/images/gallery-3.jpg') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery-3.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.6s">
                        <a href="{{ asset('frontend/images/gallery-4.jpg') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery-4.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.8s">
                        <a href="{{ asset('frontend/images/gallery-5.jpg') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery-5.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1s">
                        <a href="{{ asset('frontend/images/gallery-6.jpg') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery-6.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>
                
                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.2s">
                        <a href="{{ asset('frontend/images/gallery-7.jpg') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery-7.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.4s">
                        <a href="{{ asset('frontend/images/gallery-8.jpg') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery-8.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.6s">
                        <a href="{{ asset('frontend/images/gallery-9.jpg') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery-9.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>
            </div>
            <!-- gallery section end -->
        </div>
    </div>

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
                                    <img src="{{ asset('frontend/images/why-choose-image-1-metal.jpg') }}"
                                        alt="">
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
                                    <img src="{{ asset('frontend/images/why-choose-image-2-metal.jpg') }}"
                                        alt="">
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
                                    <img src="{{ asset('frontend/images/why-choose-image-3-metal.jpg') }}"
                                        alt="">
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
                            <h3 class="wow fadeInUp">Why choose us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Setting new standards in textile quality
                                worldwide</h2>
                        </div>
                        <!-- Section Title End -->
                        <!-- Why Choose Items List Start -->
                        <div class="why-choose-items-list-metal wow fadeInUp">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item-metal">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-why-choose-item-1-metal.svg') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-item-content-metal">
                                    <h3>Superior Quality</h3>
                                    <p>We ensure every fabric meets highest standards of durability.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item-metal wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-why-choose-item-2-metal.svg') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-item-content-metal">
                                    <h3>On-Time Delivery</h3>
                                    <p>We ensure every fabric meets highest standards of durability.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item-metal wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-why-choose-item-3-metal.svg') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-item-content-metal">
                                    <h3>Custom Solutions</h3>
                                    <p>We ensure every fabric meets highest standards of durability.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item-metal wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-why-choose-item-4-metal.svg') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-item-content-metal">
                                    <h3>Trusted Service</h3>
                                    <p>We ensure every fabric meets highest standards of durability.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Items List End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>
            </div>
        </div>
    </div>



@endsection
