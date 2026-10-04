@php
    $socials = collect(\App\Models\Setting::GROUPS['Social Links'])
        ->map(fn ($field, $key) => ['icon' => $field['icon'], 'url' => setting($key)])
        ->filter(fn ($social) => $social['url']);
    $phone = setting('footer_phone');
    $email = setting('footer_email');
    $offices = collect([
        [
            'title' => setting('footer_bd_office_title', 'BD Office'),
            'address' => setting('footer_address'),
        ],
        [
            'title' => setting('footer_overseas_office_title', 'Overseas Office'),
            'address' => setting('footer_overseas_office_address'),
        ],
    ])->filter(fn ($office) => $office['address']);
@endphp
<footer class="main-footer-metal bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <!-- About Footer Start -->
                    <div class="about-footer-metal">
                        @if ($logo = setting('footer_logo'))
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset($logo) }}" alt="{{ config('app.name') }}"></a>
                        </div>
                        <!-- Footer Logo End -->
                        @endif

                        @if ($about = setting('footer_about'))
                        <div class="about-footer-content-metal">
                            <p>{{ $about }}</p>
                        </div>
                        @endif

                        @if ($socials->isNotEmpty())
                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links-metal">
                            <ul>
                                @foreach ($socials as $social)
                                    <li><a href="{{ $social['url'] }}" @if ($social['url'] !== '#') target="_blank" rel="noopener" @endif><i class="fa-brands {{ $social['icon'] }}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Footer Social Links End -->
                        @endif
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-xl-9">
                    <!-- Footer Links Box Start -->
                    <div class="footer-links-box-metal">
                        @if ($links = \App\Models\Setting::links('footer_links'))
                        <!-- Footer Links Start -->
                        <div class="footer-links-metal">
                            <h3>{{ setting('footer_links_title') }}</h3>
                            <ul>
                                @foreach ($links as $link)
                                    <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                        @endif

                        @if ($phone || $email)
                        <!-- Footer Contact Start -->
                        <div class="footer-links-metal footer-contact-box-metal">
                            <h3>{{ setting('footer_contact_title') }}</h3>
                            <div class="footer-contact-item-list-metal">
                                @if ($phone)
                                <div class="footer-contact-item-metal">
                                    <p>{{ setting('footer_phone_label') }}</p>
                                    <h4><a href="tel:{{ preg_replace('/[^\d+]/', '', $phone) }}">{{ $phone }}</a></h4>
                                </div>
                                @endif

                                @if ($email)
                                <div class="footer-contact-item-metal">
                                    <p>{{ setting('footer_email_label') }}</p>
                                    <h4><a href="mailto:{{ $email }}">{{ $email }}</a></h4>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- Footer Contact End -->
                        @endif

                        @if ($offices->isNotEmpty())
                        <!-- Footer Offices Start -->
                        <div class="footer-links-metal footer-addresses-metal">
                            <h3>{{ setting('footer_offices_title', 'Our Offices') }}</h3>

                            @foreach ($offices as $office)
                                <div class="footer-location-item-metal">
                                    <div class="icon-box">
                                        <img src="{{ asset('frontend/images/icon-location-accent.svg') }}" alt="">
                                    </div>
                                    <div class="footer-location-item-content-metal">
                                        <h4>{{ $office['title'] }}</h4>
                                        <p>{{ $office['address'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Footer Offices End -->
                        @endif
                    </div>
                    <!-- Footer Links Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Text Start -->
                    <div class="footer-copyright-text-metal">
                        <p>{{ str_replace('{year}', date('Y'), setting('footer_copyright', 'Copyright © {year} All Rights Reserved.')) }}</p>
                    </div>
                    <!-- Footer Copyright Text End -->
                </div>
            </div>
        </div>
    </footer>
