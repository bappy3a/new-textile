@extends('layouts.master')

@section('content')

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky bg-section">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="index.html">
						<img src="images/logo.svg" alt="Logo">
					</a>
					<!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item submenu"><a class="nav-link" href="index.html">Home</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="index-3.html">Home - Version 1</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-2.html">Home - Version 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-4.html">Home - Version 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="service-single.html">Service Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                                        <li class="nav-item"><a class="nav-link" href="project-single.html">Project Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team-single.html">Team Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing Plan</a></li>
                                        <li class="nav-item"><a class="nav-link" href="testimonials.html">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="image-gallery.html">Image Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="video-gallery.html">Video Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="faqs.html">FAQs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="contact.html" class="btn-default btn-highlighted">Contact Us</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

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
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
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

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-image-box wow fadeInUp">
                        <!-- About Us Image Box 1 Start -->
                        <div class="about-us-image-box-1">
                            <!-- About Us Image 1 Start -->
                            <div class="about-us-image">
                                <figure class="image-anime">
                                    <img src="images/about-us-image-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image 1 End -->
                        </div>
                        <!-- About Us Image Box 1 End -->
                        
                        <!-- About Us Image Box 2 Start -->
                        <div class="about-us-image-box-2">
                            <!-- Learn More Circle Start -->
                            <div class="learn-more-circle">
                                <a href="contact.html">
                                    <img src="images/contact-us-circle.svg" alt="">
                                </a>
                            </div>
                            <!-- Learn More Circle End -->
                            
                            <!-- About Us Image 2 Start -->
                            <div class="about-us-image">
                                <figure class="image-anime">
                                    <img src="images/about-us-image-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image 2 End -->
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
                            <h3 class="wow fadeInUp">About Our Company</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Innovative textile solutions for a stylish tomorrow</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We blend creativity, technology, and craftsmanship to produce premium textiles that set new standards in quality and design.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            <!-- About Us List Start -->
                            <div class="about-us-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>Advanced Weaving Technology</li>
                                    <li>Sustainable Production Practices</li>
                                    <li>Experienced Craftsmanship Team</li>
                                </ul>
                            </div>
                            <!-- About Us List End -->

                            <!-- About Us Counter Box Start -->
                            <div class="about-us-body-counter wow fadeInUp" data-wow-delay="0.4s">
                                <!-- About Us Counter Start -->
                                <div class="about-us-counter-content">
                                    <h2><i class="fa-solid fa-star"></i> <span class="counter">4.9</span> <sub>(Ratings)</sub></h2>
                                    <p>1K+ Reviews On Trustpilot</p>
                                </div>
                                <!-- About Us Counter End -->
                                
                                <!-- About Us Counter Image Start -->
                                <div class="about-us-counter-image">
                                    <figure>
                                        <img src="images/about-counter-image.png" alt="">
                                    </figure>
                                </div>
                                <!-- About Us Counter Image End -->
                            </div>
                            <!-- About Us Counter Box End -->

                            <!-- About Us Item List Start -->
                            <div class="about-us-item-list wow fadeInUp" data-wow-delay="0.6s">
                                <!-- About Us Item Start -->
                                <div class="about-us-item">
                                    <div class="icon-box">
                                        <img src="images/icon-about-item-1.svg" alt="">
                                    </div>
                                    <div class="about-us-item-content">
                                        <h3>Cutting-Edge Dyeing Techniques</h3>
                                    </div>
                                </div>
                                <!-- About Us Item End -->

                                <!-- About Us Item Start -->
                                <div class="about-us-item">
                                    <div class="icon-box">
                                        <img src="images/icon-about-item-2.svg" alt="">
                                    </div>
                                    <div class="about-us-item-content">
                                        <h3>Collaborative Design Partnerships</h3>
                                    </div>
                                </div>
                                <!-- About Us Item End -->
                            </div>
                            <!-- About Us Item List End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                            <!-- About Us Button Start -->
                            <div class="about-us-btn">
                                <a href="contact.html" class="btn-default">Contact now</a>
                            </div>
                            <!-- About Us Button End -->

                            <!-- Contact Now Box Start -->
                            <div class="about-contact-box">
                                <div class="icon-box">
                                    <img src="images/icon-headset.svg" alt="">
                                </div>
                                <div class="about-contact-box-content">
                                    <p>Need Any Help?</p>
                                    <h3><a href="tel:+123456789">+(123) 456-789</a></h3>
                                </div>
                            </div>
                            <!-- Contact Now Box End -->
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Approach Image Box Start -->
                    <div class="approach-image-box">
                        <div class="approach-image-box-1">
                            <!-- Approach Image Start -->
                            <div class="approach-image-1">
                                <figure>
                                    <img src="images/approach-image-1.png" alt="">
                                </figure>
                            </div>
                            <!-- Approach Image End -->
                        </div>

                        <div class="approach-image-box-2">
                            <!-- Approach Image Start -->
                            <div class="approach-image-2">
                                <figure class="image-anime reveal">
                                    <img src="images/approach-image-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Approach Image End -->

                            <!-- Approach Counter Item Start -->
                            <div class="approach-counter-item">
                                <div class="icon-box">
                                    <img src="images/icon-approach-counter-1.svg" alt="">
                                </div>
                                <div class="approach-counter-item-content">
                                    <h2><span class="counter">100</span>+</h2>
                                    <p>killed Designer</p>
                                </div>
                            </div>
                            <!-- Approach Counter Item End -->
                        </div>
                    </div>
                    <!-- Approach Image Box End -->
                </div>
                
                <div class="col-xl-6">
                    <!-- Our Approach Content Start -->
                    <div class="our-approach-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Approach</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">What makes us your trusted textile partner</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We take pride in being a trusted name in the textile industry, known for our commitment to quality, innovation, and sustainability. Our team blends advanced technology with years </p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Approch Items List Start -->
                        <div class="approach-items-list">
                            <!-- Approach Item Start -->
                            <div class="approach-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="images/icon-mission.svg" alt="">
                                </div>
                                <div class="approach-item-content">
                                    <h3>Our Mission</h3>
                                    <p>We blend creativity, technology, and craftsmanship to produce premium textiles that set new standards in quality and design.</p>
                                </div>
                            </div>
                            <!-- Approach Item End -->

                            <!-- Approach Item Start -->
                            <div class="approach-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="images/icon-vision.svg" alt="">
                                </div>
                                <div class="approach-item-content">
                                    <h3>Our vision</h3>
                                    <p>Our production process is built on the foundation of environmental responsibility and resource efficiency. We use eco-friendly materials, low-impact dyes.</p>
                                </div>
                            </div>
                            <!-- Approach Item End -->
                        </div>
                        <!-- Approch Items List End -->
                    </div>
                    <!-- Our Approach Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Why Choose Us Content Start -->
                    <div class="why-choose-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Why Choose Us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Turning quality into a tradition you can trust</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our clients choose us not only for the quality they see but for the consistency and integrity woven into every thread we create.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose List Start -->
                        <div class="why-choose-us-body wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Every fabric is crafted with precision</li>
                                <li>Decades of experience in woven detail</li>
                            </ul>
                        </div>
                        <!-- Why Choose List End -->

                        <!-- Why Choose Us List Start -->
                        <div class="why-choose-item-list wow fadeInUp">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item highlighted-box">
                                <!-- Why Choose Item Header Start -->
                                <div class="why-choose-item-header">
                                    <ul>
                                        <li>Our Expert Team</li>
                                    </ul>
                                </div>
                                <!-- Why Choose Item Header End -->

                                <!-- Why Choose Item Content Start -->
                                <div class="why-choose-item-content">
                                    <h2><span class="counter">80</span>+</h2>
                                    <h3>Our Team Members</h3>
                                    <p>Behind every exceptional fabric is a dedicated team of experts.</p>
                                </div>
                                <!-- Why Choose Item Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item">
                                <!-- Why Choose Item Header Start -->
                                <div class="why-choose-item-header">
                                    <ul>
                                        <li>Happy Customers</li>
                                    </ul>
                                </div>
                                <!-- Why Choose Item Header End -->

                                <!-- Why Choose Item Content Start -->
                                <div class="why-choose-item-content">
                                    <h2><span class="counter">98</span>%</h2>
                                    <h3>Client Satisfaction Rate</h3>
                                    <p>Our commitment to excellence is reflected in the trust.</p>
                                </div>
                                <!-- Why Choose Item Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Us List End -->
                    </div>
                    <!-- Why Choose Us Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Why Choose Us Image Start -->
                    <div class="why-choose-us-image wow fadeInUp" data-wow-delay="0.2s">
                        <figure>
                            <img src="images/why-choose-us-image.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Us Image End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="images/author-1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="images/icon-phone-primary.svg" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->    
                        <p>Gain Insights from Industry-Leading Logistics Experts - <a href="tel:+123456789">Call Us: +(123) 456-789</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- What We Do Section Start -->
    <div class="what-we-do bg-section dark-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- What We Do Box Start -->
                    <div class="what-we-do-box">
                        <!-- What We Do Image Start -->
                        <div class="what-we-do-image">
                            <figure class="image-anime">
                                <img src="images/what-we-do-image.jpg" alt="">
                            </figure>
                        </div>
                        <!-- What We Do Image End -->

                        <!-- What We Do Content Start -->
                        <div class="what-we-do-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">What We Do</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Where tradition meets modern textile technology</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Our clients choose us not only for the quality they see but for the consistency and integrity woven into every thread we create.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- What We Body Start -->
                            <div class="what-we-body wow fadeInUp" data-wow-delay="0.4s">
                                <!-- What We Body Item Start -->
                                <div class="what-we-body-item">
                                    <div class="icon-box">
                                        <img src="images/icon-what-we-body-1.svg" alt="">
                                    </div>
                                    <div class="what-we-body-item-content">
                                        <h3>Inconsistent Fabric Quality</h3>
                                        <p>Every fabric we produce goes through multiple stages of testing and inspection to ensure durability, consistency, and a flawless finish. Our strict quality standards guarantee</p>
                                    </div>
                                </div>
                                <!-- What We Body Item End -->

                                <!-- What We Body Item Start -->
                                <div class="what-we-body-item">
                                    <div class="icon-box">
                                        <img src="images/icon-what-we-body-2.svg" alt="">
                                    </div>
                                    <div class="what-we-body-item-content">
                                        <h3>Limited Access to Sustainable</h3>
                                        <p>Our dedicated R&D team constantly explores new fibers, weaves, and finishes to create fabrics that balance comfort, performance, and sustainability.</p>
                                    </div>
                                </div>
                                <!-- What We Body Item End -->
                            </div>
                            <!-- What We Body End -->

                            <!-- What We Counters List Start -->
                            <div class="what-we-counters-list wow fadeInUp">
                                <!-- What We Counter Item Start -->
                                <div class="what-we-counter-item">
                                    <div class="icon-box">
                                        <img src="images/icon-what-we-counter-1.svg" alt="">
                                    </div>
                                    <div class="what-we-counter-item-content">
                                        <h2><span class="counter">25</span>+</h2>
                                        <p>Years Of Excellence</p>
                                    </div>
                                </div>
                                <!-- What We Counter Item End -->

                                <!-- What We Counter Item Start -->
                                <div class="what-we-counter-item">
                                    <div class="icon-box">
                                        <img src="images/icon-what-we-counter-2.svg" alt="">
                                    </div>
                                    <div class="what-we-counter-item-content">
                                        <h2><span class="counter">10</span>k+</h2>
                                        <p>Meters Of Premium</p>
                                    </div>
                                </div>
                                <!-- What We Counter Item End -->

                                <!-- What We Counter Item Start -->
                                <div class="what-we-counter-item">
                                    <div class="icon-box">
                                        <img src="images/icon-what-we-counter-3.svg" alt="">
                                    </div>
                                    <div class="what-we-counter-item-content">
                                        <h2><span class="counter">500</span>+</h2>
                                        <p>Client Trust by Global</p>
                                    </div>
                                </div>
                                <!-- What We Counter Item End -->
                            </div>
                            <!-- What We Counters List End -->
                        </div>
                        <!-- What We Do Content End -->
                    </div>
                    <!-- What We Do Box End -->                    
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->

    <!-- Our Awards Section Start -->
    <div class="our-awards">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Our Awards Content Start -->
                    <div class="our-awards-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Awards</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Honored for excellence in textile manufacturing</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our journey in the textile industry has been marked by innovation, dedication, and excellence. Over the years, we've been honored with numerous awards and recognitions that celebrate</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Awards Button Start -->
                        <div class="awards-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="contact.html" class="btn-default">contact us</a>
                        </div>
                        <!-- Awards Button End -->
                    </div>
                    <!-- Our Awards Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Awards Items List Start -->
                    <div class="awards-items-list">
                        <!-- Awards Item Start -->
                        <div class="awards-item wow fadeInUp">
                            <!-- Awards Item Number Start -->
                            <div class="awards-item-no">
                                <h3>01</h3>
                            </div>
                            <!-- Awards Item Number End -->

                            <!-- Awards Item Body Start -->
                            <div class="awards-item-body">
                                <div class="awards-item-image">
                                    <img src="images/awards-image-1.svg" alt="">
                                </div>
                                <div class="awards-item-content">
                                    <h3>Excellence in Textile Innovation Award</h3>
                                    <p>Each product reflects precision, care, and a dedication to delivering unmatched value to our clients, we combine.</p>
                                </div>
                            </div>
                            <!-- Awards Item Body End -->
                        </div>
                        <!-- Awards Item End -->

                        <!-- Awards Item Start -->
                        <div class="awards-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Awards Item Number Start -->
                            <div class="awards-item-no">
                                <h3>02</h3>
                            </div>
                            <!-- Awards Item Number End -->

                            <!-- Awards Item Body Start -->
                            <div class="awards-item-body">
                                <div class="awards-item-image">
                                    <img src="images/awards-image-2.svg" alt="">
                                </div>
                                <div class="awards-item-content">
                                    <h3>Best Sustainable Fabric Manufacturer</h3>
                                    <p>Each product reflects precision, care, and a dedication to delivering unmatched value to our clients, we combine.</p>
                                </div>
                            </div>
                            <!-- Awards Item Body End -->
                        </div>
                        <!-- Awards Item End -->

                        <!-- Awards Item Start -->
                        <div class="awards-item wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Awards Item Number Start -->
                            <div class="awards-item-no">
                                <h3>03</h3>
                            </div>
                            <!-- Awards Item Number End -->

                            <!-- Awards Item Body Start -->
                            <div class="awards-item-body">
                                <div class="awards-item-image">
                                    <img src="images/awards-image-3.svg" alt="">
                                </div>
                                <div class="awards-item-content">
                                    <h3>Global Quality Excellence Award</h3>
                                    <p>Each product reflects precision, care, and a dedication to delivering unmatched value to our clients, we combine.</p>
                                </div>
                            </div>
                            <!-- Awards Item Body End -->
                        </div>
                        <!-- Awards Item End -->

                        <!-- Awards Item Start -->
                        <div class="awards-item wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Awards Item Number Start -->
                            <div class="awards-item-no">
                                <h3>04</h3>
                            </div>
                            <!-- Awards Item Number End -->

                            <!-- Awards Item Body Start -->
                            <div class="awards-item-body">
                                <div class="awards-item-image">
                                    <img src="images/awards-image-4.svg" alt="">
                                </div>
                                <div class="awards-item-content">
                                    <h3>Green Manufacture Leadership Award</h3>
                                    <p>Each product reflects precision, care, and a dedication to delivering unmatched value to our clients, we combine.</p>
                                </div>
                            </div>
                            <!-- Awards Item Body End -->
                        </div>
                        <!-- Awards Item End -->
                    </div>
                    <!-- Awards Items List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Awards Section End -->

    <!-- Our FAQs Section Start -->
    <div class="our-faqs bg-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <!-- Our FAQs Content Start -->
                    <div class="our-faqs-content">
                        <!-- section title start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Frequently Asked Questions</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Everything you need to know about textile</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">From product details to production techniques, our FAQ section helps you quickly find the information you need.</p>
                        </div>
                        <!-- section title end -->

                        <!-- Contact Us Circle Start -->
                        <div class="contact-us-circle">
                            <a href="contact.html">
                                <img src="images/contact-us-circle.svg" alt="">
                            </a>
                        </div>
                        <!-- Contact Us Circle End -->
                    </div>
                    <!-- Our FAQs content end -->
                </div>

                <div class="col-xl-7">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="faqaccordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Q1. Can you provide customized fabric designs?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, we offer complete customization services. You can choose the fabric type, color, pattern, weight, and finish, Our design and R&D team works closely with clients to develop unique fabrics that meet specific needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
    
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Q2. Are your manufacturing processes sustainable?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, we offer complete customization services. You can choose the fabric type, color, pattern, weight, and finish, Our design and R&D team works closely with clients to develop unique fabrics that meet specific needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
    
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Q3. How long does it take to manufacture and deliver orders?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, we offer complete customization services. You can choose the fabric type, color, pattern, weight, and finish, Our design and R&D team works closely with clients to develop unique fabrics that meet specific needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
    
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Q4. What types of fabrics do you manufacture?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, we offer complete customization services. You can choose the fabric type, color, pattern, weight, and finish, Our design and R&D team works closely with clients to develop unique fabrics that meet specific needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
    
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    Q5. Do you offer samples before bulk production?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, we offer complete customization services. You can choose the fabric type, color, pattern, weight, and finish, Our design and R&D team works closely with clients to develop unique fabrics that meet specific needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQs Section End-->

@endsection