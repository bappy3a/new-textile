@extends('layouts.master')

@section('content')
    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Contact Us Image Box Start -->
                        <div class="contact-us-image-box">
                            @if ($contact?->image)
                            <div class="contact-us-image">
                                <figure class="image-anime">
                                    <img src="{{ $contact->image_url }}" alt="Contact us">
                                </figure>
                            </div>
                            @endif

                            @if ($contact?->working_hours_list)
                            <!-- Working Hour Box Start -->
                            <div class="working-hour-box">
                                <h3>{{ $contact->working_hours_title }}</h3>
                                <ul>
                                    @foreach ($contact->working_hours_list as $line)
                                        <li>{{ $line }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Working Hour Box End -->
                            @endif
                        </div>
                        <!-- Contact Us Image Box End -->

                        <!-- Contact Info List Start -->
                        <div class="contact-info-list">
                            @if ($contact?->email)
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-mail-primary.svg') }}" alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <h3>Email Address</h3>
                                    <p><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                                </div>
                            </div>
                            @endif

                            @if ($contact?->phone)
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-phone-primary.svg') }}" alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <h3>Phone Number</h3>
                                    <p><a href="{{ $contact->phone_link }}">{{ $contact->phone }}</a></p>
                                </div>
                            </div>
                            @endif

                            @if ($contact?->address)
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icon-location-primary.svg') }}" alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <h3>Our Location</h3>
                                    <p>{{ $contact->address }}</p>
                                </div>
                            </div>
                            @endif
                        </div>
                        <!-- Contact Info List End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ $contact?->form_subtitle ?? 'Contact Us' }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $contact?->form_title ?? 'Reach out to our team today' }}</h2>
                            @if ($contact?->form_description)
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $contact->form_description }}</p>
                            @endif
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <form id="contactForm" action="{{ route('contact-us.store') }}" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" value="{{ old('fname') }}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" value="{{ old('lname') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" value="{{ old('email') }}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="Message">{{ old('message') }}</textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default"><span>Send Message</span></button>
                                            {{-- Filled by the theme's AJAX handler; the session/errors fallback covers submits without JS. --}}
                                            @if (session('success'))
                                                <div id="msgSubmit" class="h4 text-success">{{ session('success') }}</div>
                                            @elseif ($errors->any())
                                                <div id="msgSubmit" class="h4 text-danger">{{ $errors->first() }}</div>
                                            @else
                                                <div id="msgSubmit" class="h3 hidden"></div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    @if ($contact?->map_embed_url)
    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">{{ $contact->map_subtitle }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $contact->map_title }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map-iframe">
                        <iframe src="{{ $contact->map_embed_url }}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->
    @endif

@endsection
