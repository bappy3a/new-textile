@extends('layouts.master')

@section('content')

    <div class="hero-metal bg-section dark-section parallaxie"
        style="background-image: url('{{ asset('frontend/assets/images/hero-bg.jpg') }}');">
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

    <div class="what-we-do-metal">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">What We Do</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Crafting innovative textiles with modern technology
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <!-- What We Content Box Start -->
                    <div class="what-we-content-box-metal">
                        <!-- What We Counter List Start -->
                        <div class="what-we-counter-list-metal wow fadeInUp">
                            <div class="what-we-counter-item-metal">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Years of Excellence</p>
                            </div>
                            <div class="what-we-counter-item-metal">
                                <h2><span class="counter">50</span>+</h2>
                                <p>Skilled Professionals</p>
                            </div>
                            <div class="what-we-counter-item-metal">
                                <h2><span class="counter">100</span>%</h2>
                                <p>Quality Assurance</p>
                            </div>
                        </div>
                        <!-- What We Counter List End -->
                        <!-- What We Image Content Start -->
                        <div class="what-we-image-content-metal wow fadeInUp" data-wow-delay="0.2s">
                            <!-- What We Content Start -->
                            <div class="what-we-content-metal">
                                <h2>High-Quality Fabric Production</h2>
                                <p>
                                    We specialize in producing premium-quality fabrics using advanced
                                    weaving and knitting technologies. Every material is crafted with
                                    precision, ensuring durability, comfort, and superior texture that
                                    meet global industry standards.
                                </p>
                            </div>
                            <!-- What We Content End -->
                            <!-- What We Content Body Start -->
                            <div class="what-we-content-body-metal">
                                <!-- What We Item Box Start -->
                                <div class="what-we-item-box-metal">
                                    <!-- What We Item Start -->
                                    <div class="what-we-item-metal">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend/images/icon-what-we-item-1-metal.svg') }}"
                                                alt="Fabric Manufacturing Excellence">
                                        </div>
                                        <div class="what-we-item-content-metal">
                                            <h3>Fabric Manufacturing Excellence</h3>
                                        </div>
                                    </div>
                                    <!-- What We Item End -->
                                    <!-- Work Circle Start -->
                                    <div class="work-circle-metal">
                                        <a href="{{ url('contact') }}">
                                            <img src="{{ asset('frontend/images/work-circle-metal.svg') }}"
                                                alt="Contact Us">
                                        </a>
                                    </div>
                                    <!-- Work Circle End -->
                                </div>
                                <!-- What We Item Box End -->
                                <!-- What We Body Image Start -->
                                <div class="what-we-body-image-metal">
                                    <img src="{{ asset('frontend/images/what-we-body-image-metal.png') }}"
                                        alt="Textile Manufacturing">
                                </div>
                                <!-- What We Body Image End -->
                            </div>
                            <!-- What We Content Body End -->
                        </div>
                        <!-- What We Image Content End -->
                    </div>
                    <!-- What We Content Box End -->
                </div>
                <div class="col-xl-6">
                    <!-- What We Image Box Start -->
                    <div class="what-we-image-box-metal wow fadeInUp">
                        <!-- What We Image Start -->
                        <div class="what-we-image-metal">
                            <figure>
                                <img src="{{ asset('frontend/images/what-we-image-metal.jpg') }}" alt="Textile Industry">
                            </figure>
                        </div>
                        <!-- What We Image End -->
                        <!-- What We Image Title Start -->
                        <div class="what-we-image-title-metal">
                            <h2>Textile</h2>
                        </div>
                        <!-- What We Image Title End -->
                    </div>
                    <!-- What We Image Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Section Start -->

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
    <!-- Why Choose Section End -->
    <!-- Our Projects Section Start -->

    <div class="our-projects-metal">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Projects</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Discover our creative technical fabric
                            projects</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp">
                        <div class="project-image">
                            <figure>
                                <img src="{{ asset('frontend/images/project-image-1.jpg') }}" alt="">
                            </figure>
                            <div class="project-btn">
                                <a href="{{ url('projects') }}">
                                    <img src="{{ asset('frontend/images/arrow-primary.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Project Item Body Start -->
                        <div class="project-item-body">
                            <div class="project-item-tag">
                                <ul>
                                    <li><a href="#">Polyester </a></li>
                                </ul>
                            </div>
                            <div class="project-item-content">
                                <h2><a href="{{ url('projects') }}">Sustainable Fabric Innovation and Design</a></h2>
                            </div>
                        </div>
                        <!-- Project Item Body End -->
                    </div>
                    <!-- Project Item End -->
                </div>
                <div class="col-xl-4 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="project-image">
                            <figure>
                                <img src="{{ asset('frontend/images/project-image-2.jpg') }}" alt="">
                            </figure>
                            <div class="project-btn">
                                <a href="{{ url('projects') }}">
                                    <img src="{{ asset('frontend/images/arrow-primary.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Project Item Body Start -->
                        <div class="project-item-body">
                            <div class="project-item-tag">
                                <ul>
                                    <li><a href="#">Blended</a></li>
                                </ul>
                            </div>
                            <div class="project-item-content">
                                <h2><a href="{{ url('projects') }}">Premium Cotton and Linen Fabric Collection</a></h2>
                            </div>
                        </div>
                        <!-- Project Item Body End -->
                    </div>
                    <!-- Project Item End -->
                </div>
                <div class="col-xl-4 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="project-image">
                            <figure>
                                <img src="{{ asset('frontend/images/project-image-3.jpg') }}" alt="">
                            </figure>
                            <div class="project-btn">
                                <a href="{{ url('projects') }}">
                                    <img src="{{ asset('frontend/images/arrow-primary.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Project Item Body Start -->
                        <div class="project-item-body">
                            <div class="project-item-tag">
                                <ul>
                                    <li><a href="#">Upholstery</a></li>
                                </ul>
                            </div>
                            <div class="project-item-content">
                                <h2><a href="{{ url('projects') }}">Global Textile Quality Improvement Initiative</a></h2>
                            </div>
                        </div>
                        <!-- Project Item Body End -->
                    </div>
                    <!-- Project Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Projects Section End -->
    <!-- Intro Video Section Start -->

    <div class="intro-video-metal bg-section dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box-metal">
                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video"
                                data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                        <!-- Video Play Button End -->
                        <!-- Intro Video List Start -->
                        <div class="intro-video-list-metal">
                            <ul>
                                <li>Quality Testing and Fabric Inspection</li>
                                <li>Client Testimonials and Success Stories</li>
                                <li>Global Export and Packaging Process Overview</li>
                                <li>Global Export and Packaging</li>
                            </ul>
                        </div>
                        <!-- Intro Video List End -->
                    </div>
                    <!-- Intro Video Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->
    <!-- Our Pricing Setion Start -->

    <div class="our-pricing-metal">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Pricing Plan</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Customized pricing plans to fit your
                            requirements</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Pricing Item Start -->
                    <div class="pricing-item-metal wow fadeInUp">
                        <!-- Pricing Item Header Start -->
                        <div class="pricing-item-header-metal">
                            <!-- Pricing Item Content Start -->
                            <div class="pricing-item-content-metal">
                                <h3>Basic Plan</h3>
                                <p>Perfect for small businesses & startups</p>
                            </div>
                            <!-- Pricing Item Content End -->
                            <!-- Pricing Item Image Start -->
                            <div class="pricing-item-image-metal">
                                <figure class="image-anime">
                                    <img src="{{ asset('frontend/images/pricing-plan-image-metal-1.jpg') }}"
                                        alt="">
                                </figure>
                            </div>
                            <!-- Pricing Item Image End -->
                            <!-- Pricing Price Start -->
                            <div class="pricing-item-price-metal">
                                <h2>$19<sub>/per meter</sub></h2>
                            </div>
                            <!-- Pricing Price End -->
                        </div>
                        <!-- Pricing Item Header End -->
                        <!-- Pricing Item Body Start -->
                        <div class="pricing-item-body-metal">
                            <!-- Pricing Item List End -->
                            <div class="pricing-item-list-metal">
                                <ul>
                                    <li>Minimum order quantity: 100 meters</li>
                                    <li>Basic dyeing and finishing options</li>
                                    <li>Delivery within 10-15 business days</li>
                                    <li>Priority production and delivery</li>
                                </ul>
                            </div>
                            <!-- Pricing Item List Start -->
                            <!-- Pricing Item Button Start -->
                            <div class="pricing-item-btn-metal">
                                <a href="{{ url('contact') }}" class="btn-default">Get Started</a>
                            </div>
                            <!-- Pricing Item Button End -->
                        </div>
                        <!-- Pricing Item Body End -->
                    </div>
                    <!-- Pricing Item End -->
                </div>
                <div class="col-xl-4 col-md-6">
                    <!-- Pricing Item Start -->
                    <div class="pricing-item-metal wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Pricing Item Header Start -->
                        <div class="pricing-item-header-metal">
                            <!-- Pricing Item Content Start -->
                            <div class="pricing-item-content-metal">
                                <h3>Standard Plan</h3>
                                <p>Perfect for small businesses & startups</p>
                            </div>
                            <!-- Pricing Item Content End -->
                            <!-- Pricing Item Image Start -->
                            <div class="pricing-item-image-metal">
                                <figure class="image-anime">
                                    <img src="{{ asset('frontend/images/pricing-plan-image-metal-2.jpg') }}"
                                        alt="">
                                </figure>
                            </div>
                            <!-- Pricing Item Image End -->
                            <!-- Pricing Price Start -->
                            <div class="pricing-item-price-metal">
                                <h2>$29<sub>/per meter</sub></h2>
                            </div>
                            <!-- Pricing Price End -->
                        </div>
                        <!-- Pricing Item Header End -->
                        <!-- Pricing Item Body Start -->
                        <div class="pricing-item-body-metal">
                            <!-- Pricing Item List End -->
                            <div class="pricing-item-list-metal">
                                <ul>
                                    <li>Minimum order quantity: 100 meters</li>
                                    <li>Basic dyeing and finishing options</li>
                                    <li>Delivery within 10-15 business days</li>
                                    <li>Priority production and delivery</li>
                                </ul>
                            </div>
                            <!-- Pricing Item List Start -->
                            <!-- Pricing Item Button Start -->
                            <div class="pricing-item-btn-metal">
                                <a href="{{ url('contact') }}" class="btn-default">Get Started</a>
                            </div>
                            <!-- Pricing Item Button End -->
                        </div>
                        <!-- Pricing Item Body End -->
                    </div>
                    <!-- Pricing Item End -->
                </div>
                <div class="col-xl-4 col-md-6">
                    <!-- Pricing Item Start -->
                    <div class="pricing-item-metal wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Pricing Item Header Start -->
                        <div class="pricing-item-header-metal">
                            <!-- Pricing Item Content Start -->
                            <div class="pricing-item-content-metal">
                                <h3>Premium Plan</h3>
                                <p>Perfect for small businesses & startups</p>
                            </div>
                            <!-- Pricing Item Content End -->
                            <!-- Pricing Item Image Start -->
                            <div class="pricing-item-image-metal">
                                <figure class="image-anime">
                                    <img src="{{ asset('frontend/images/pricing-plan-image-metal-3.jpg') }}"
                                        alt="">
                                </figure>
                            </div>
                            <!-- Pricing Item Image End -->
                            <!-- Pricing Price Start -->
                            <div class="pricing-item-price-metal">
                                <h2>$39<sub>/per meter</sub></h2>
                            </div>
                            <!-- Pricing Price End -->
                        </div>
                        <!-- Pricing Item Header End -->
                        <!-- Pricing Item Body Start -->
                        <div class="pricing-item-body-metal">
                            <!-- Pricing Item List End -->
                            <div class="pricing-item-list-metal">
                                <ul>
                                    <li>Minimum order quantity: 100 meters</li>
                                    <li>Basic dyeing and finishing options</li>
                                    <li>Delivery within 10-15 business days</li>
                                    <li>Priority production and delivery</li>
                                </ul>
                            </div>
                            <!-- Pricing Item List Start -->
                            <!-- Pricing Item Button Start -->
                            <div class="pricing-item-btn-metal">
                                <a href="{{ url('contact') }}" class="btn-default">Get Started</a>
                            </div>
                            <!-- Pricing Item Button End -->
                        </div>
                        <!-- Pricing Item Body End -->
                    </div>
                    <!-- Pricing Item End -->
                </div>
                <div class="col-lg-12">
                    <!-- Pricing Benifit List Start -->
                    <div class="pricing-benefit-list-metal wow fadeInUp" data-wow-delay="0.2s">
                        <ul>
                            <li><img src="{{ asset('frontend/images/icon-pricing-benefit-1.svg') }}" alt="">Get
                                30 day free trial</li>
                            <li><img src="{{ asset('frontend/images/icon-pricing-benefit-2.svg') }}" alt="">No
                                any hidden fees pay</li>
                            <li><img src="{{ asset('frontend/images/icon-pricing-benefit-3.svg') }}" alt="">You
                                can cancel anytime</li>
                        </ul>
                    </div>
                    <!-- Pricing Benifit List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Pricing Setion End -->
    <!-- How It Work Section Start -->

    <div class="how-it-work-metal bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Work It Work Content Metal Start -->
                    <div class="how-it-work-content-metal">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">How It Work</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">How our textile manufacturing process
                                works efficiently</h2>
                        </div>
                        <!-- Section Title End -->
                        <!-- How Work Btn Start -->
                        <div class="how-work-btn-metal wow fadeInUp" data-wow-delay="0.2s">
                            <a href="{{ url('contact') }}" class="btn-default btn-highlighted">Explore Our Process</a>
                        </div>
                        <!-- How Work Btn End -->
                    </div>
                    <!-- Work It Work Content Metal End -->
                </div>
                <div class="col-xl-6">
                    <!-- How Work Item List Metal Start -->
                    <div class="how-work-item-list-metal wow fadeInUp">
                        <!-- How Work Item Start -->
                        <div class="how-work-item-metal">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icon-how-work-1-metal.svg') }}" alt="">
                            </div>
                            <div class="how-work-item-content-metal">
                                <h4>Step 01</h4>
                                <h3>Fabric Production</h3>
                                <p>Once the design is approved our state of the art machinery takes.</p>
                            </div>
                        </div>
                        <!-- How Work Item End -->
                        <!-- How Work Item Start -->
                        <div class="how-work-item-metal">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icon-how-work-2-metal.svg') }}" alt="">
                            </div>
                            <div class="how-work-item-content-metal">
                                <h4>Step 02</h4>
                                <h3>Dyeing & Finishing</h3>
                                <p>Once the design is approved our state of the art machinery takes.</p>
                            </div>
                        </div>
                        <!-- How Work Item End -->
                        <!-- How Work Item Start -->
                        <div class="how-work-item-metal">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icon-how-work-3-metal.svg') }}" alt="">
                            </div>
                            <div class="how-work-item-content-metal">
                                <h4>Step 03</h4>
                                <h3>Quality Control & Testing</h3>
                                <p>Once the design is approved our state of the art machinery takes.</p>
                            </div>
                        </div>
                        <!-- How Work Item End -->
                        <!-- How Work Item Start -->
                        <div class="how-work-item-metal">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icon-how-work-4-metal.svg') }}" alt="">
                            </div>
                            <div class="how-work-item-content-metal">
                                <h4>Step 04</h4>
                                <h3>Packaging & Delivery</h3>
                                <p>Once the design is approved our state of the art machinery takes.</p>
                            </div>
                        </div>
                        <!-- How Work Item End -->
                    </div>
                    <!-- How Work Item List Metal End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work Section Start -->
    <!-- Our Team Section Start -->

    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Expert Team</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Meet the skilled minds behind our success
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- team Image Start -->
                        <div class="team-item-image">
                            <a href="{{ url('team') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend/images/team-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Item Content Start -->
                            <div class="team-item-content">
                                <h3><a href="{{ url('team') }}">Manish Gupta</a></h3>
                                <p>Head of Fabric Design</p>
                            </div>
                            <!-- Team Item Content End -->
                            <!-- Team Social List Start -->
                            <div class="team-social-list-box">
                                <!-- Team Social Button Start -->
                                <div class="team-social-btn">
                                    <a href="{{ url('team') }}"><img
                                            src="{{ asset('frontend/images/icon-share.svg') }}" alt=""></a>
                                </div>
                                <!-- Team Social Button End -->
                                <!-- Team Social List Start -->
                                <div class="team-social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social List End -->
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- team Image Start -->
                        <div class="team-item-image">
                            <a href="{{ url('team') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend/images/team-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Item Content Start -->
                            <div class="team-item-content">
                                <h3><a href="{{ url('team') }}">Rajesh Mehta</a></h3>
                                <p>Head of Fabric Design</p>
                            </div>
                            <!-- Team Item Content End -->
                            <!-- Team Social List Start -->
                            <div class="team-social-list-box">
                                <!-- Team Social Button Start -->
                                <div class="team-social-btn">
                                    <a href="{{ url('team') }}"><img
                                            src="{{ asset('frontend/images/icon-share.svg') }}" alt=""></a>
                                </div>
                                <!-- Team Social Button End -->
                                <!-- Team Social List Start -->
                                <div class="team-social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social List End -->
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- team Image Start -->
                        <div class="team-item-image">
                            <a href="{{ url('team') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend/images/team-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Item Content Start -->
                            <div class="team-item-content">
                                <h3><a href="{{ url('team') }}">Mahi Gupta</a></h3>
                                <p>Head of Fabric Design</p>
                            </div>
                            <!-- Team Item Content End -->
                            <!-- Team Social List Start -->
                            <div class="team-social-list-box">
                                <!-- Team Social Button Start -->
                                <div class="team-social-btn">
                                    <a href="{{ url('team') }}"><img
                                            src="{{ asset('frontend/images/icon-share.svg') }}" alt=""></a>
                                </div>
                                <!-- Team Social Button End -->
                                <!-- Team Social List Start -->
                                <div class="team-social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social List End -->
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Team Cta Box Start -->
                    <div class="team-cta-box wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Team Cta Box Header Start -->
                        <div class="team-cta-box-header">
                            <!-- Satisfy Client Images Start -->
                            <div class="satisfy-client-images">
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('frontend/images/author-1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('frontend/images/author-2.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('frontend/images/author-3.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image add-more">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </div>
                            <!-- Satisfy Client Images End -->
                        </div>
                        <!-- Team Cta Box Header End -->
                        <!-- Team Cta Box Body Start -->
                        <div class="team-cta-box-body">
                            <div class="team-cta-box-content">
                                <h2><span class="counter">200</span>+</h2>
                                <p>A dedicated team of designers & experts driving success.</p>
                            </div>
                            <div class="team-cta-box-btn">
                                <a href="{{ url('contact') }}" class="readmore-btn">Join Our Team </a>
                            </div>
                        </div>
                        <!-- Team Cta Box Body End -->
                    </div>
                    <!-- Team Cta Box End -->
                </div>
                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p>Join our team and help weave innovation, quality, and success together worldwide.</p>
                        <ul>
                            <li><span class="counter">4.0</span>/5</li>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li>Our 4200 Review </li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->
    <!-- Our Testimonials Section Start -->

    <div class="our-testimonials-metal bg-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Testimonial Image Box Start -->
                    <div class="testimonial-image-box-metal wow fadeInUp">
                        <!-- Testimonial Image Start -->
                        <div class="testimonial-image-metal">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/testimonial-image-metal.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Testimonial Image End -->
                        <!-- Happy Customer Box Start -->
                        <div class="happy-customer-box-metal">
                            <!-- Satisfy Client Images Start -->
                            <div class="satisfy-client-images">
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('frontend/images/author-1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('frontend/images/author-2.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('frontend/images/author-3.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image add-more">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </div>
                            <!-- Satisfy Client Images End -->
                            <!-- Satisfy Client Counter Start -->
                            <div class="happy-customer-counter-metal">
                                <h3><span class="counter">4.9</span>/5</h3>
                                <i class="fa fa-solid fa-star"></i>
                                <i class="fa fa-solid fa-star"></i>
                                <i class="fa fa-solid fa-star"></i>
                                <i class="fa fa-solid fa-star"></i>
                                <i class="fa fa-solid fa-star"></i>
                            </div>
                            <!-- Satisfy Client Counter End -->
                        </div>
                        <!-- Happy Customer Box End -->
                    </div>
                    <!-- Testimonial Image Box End -->
                </div>
                <div class="col-xl-8">
                    <!-- Testimonial Content Box Start -->
                    <div class="testimonial-content-box-metal">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Testimonials</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Trusted by global brand for quality
                                textile manufacturing solutions</h2>
                        </div>
                        <!-- Section Title End -->
                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider-metal">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item-metal">
                                            <div class="testimonial-item-quote-metal">
                                                <img src="{{ asset('frontend/images/testimonial-quote-metal.svg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-content-metal">
                                                <p>"Working with this team has been an absolute game-changer. Their fabric
                                                    quality and timely delivery have helped us maintain consistency in our
                                                    apparel line. Truly dependable!"</p>
                                            </div>
                                            <!-- Testimonial Item Author Start -->
                                            <div class="testimonial-item-author-metal">
                                                <div class="testimonial-author-image-metal">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('frontend/images/author-1.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content-metal">
                                                    <h3>Guy Hawkins</h3>
                                                    <p>Head of Fabric Design</p>
                                                </div>
                                            </div>
                                            <!-- Testimonial Item Author End -->
                                        </div>
                                        <!-- Testimonial Item End -->
                                    </div>
                                    <!-- Testimonial Slide End -->
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonia Item Start -->
                                        <div class="testimonial-item-metal">
                                            <div class="testimonial-item-quote-metal">
                                                <img src="{{ asset('frontend/images/testimonial-quote-metal.svg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-content-metal">
                                                <p>"Working with this team has been an absolute game-changer. Their fabric
                                                    quality and timely delivery have helped us maintain consistency in our
                                                    apparel line. Truly dependable!"</p>
                                            </div>
                                            <!-- Testimonial Item Author Start -->
                                            <div class="testimonial-item-author-metal">
                                                <div class="testimonial-author-image-metal">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('frontend/images/author-2.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content-metal">
                                                    <h3>Kristn Watson</h3>
                                                    <p>Head of Fabric Design</p>
                                                </div>
                                            </div>
                                            <!-- Testimonial Item Author End -->
                                        </div>
                                        <!-- Testimonia Item End -->
                                    </div>
                                    <!-- Testimonial Slide End -->
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonia Item Start -->
                                        <div class="testimonial-item-metal">
                                            <div class="testimonial-item-quote-metal">
                                                <img src="{{ asset('frontend/images/testimonial-quote-metal.svg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-content-metal">
                                                <p>"Working with this team has been an absolute game-changer. Their fabric
                                                    quality and timely delivery have helped us maintain consistency in our
                                                    apparel line. Truly dependable!"</p>
                                            </div>
                                            <!-- Testimonial Item Author Start -->
                                            <div class="testimonial-item-author-metal">
                                                <div class="testimonial-author-image-metal">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('frontend/images/author-3.jpg') }}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content-metal">
                                                    <h3>Kristin Watson</h3>
                                                    <p>Head of Fabric Design</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-pagination-metal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
