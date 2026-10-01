<ul class="nk-menu">
    <li class="nk-menu-item {{ areActiveRoutes(['dashboard']) }}">
        <a href="{{ route('dashboard') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
            <span class="nk-menu-text">Dashboard</span>
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['sliders.index', 'sliders.create', 'sliders.edit']) }}">
        <a href="{{ route('sliders.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-img-fill"></em></span>
            <span class="nk-menu-text">Sliders</span>
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['hero-info.edit']) }}">
        <a href="{{ route('hero-info.edit') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-info-fill"></em></span>
            <span class="nk-menu-text">Hero Info</span>
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['about-us.edit']) }}">
        <a href="{{ route('about-us.edit') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
            <span class="nk-menu-text">About Us</span>
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['services.index', 'services.create', 'services.edit', 'services.section.edit']) }}">
        <a href="{{ route('services.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-grid-fill"></em></span>
            <span class="nk-menu-text">Services</span>
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['gallery.index', 'gallery.create', 'gallery.edit']) }}">
        <a href="{{ route('gallery.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-camera-fill"></em></span>
            <span class="nk-menu-text">Gallery</span>
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['why-choose.index', 'why-choose.create', 'why-choose.edit', 'why-choose.section.edit']) }}">
        <a href="{{ route('why-choose.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-award-fill"></em></span>
            <span class="nk-menu-text">Why Choose Us</span>
        </a>
    </li>
</ul><!-- .nk-menu -->
