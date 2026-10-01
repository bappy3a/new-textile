@php
    $homeMenus = [
        ['label' => 'Sliders', 'route' => 'sliders.index', 'active' => ['sliders.index', 'sliders.create', 'sliders.edit']],
        ['label' => 'Hero Info', 'route' => 'hero-info.edit', 'active' => ['hero-info.edit']],
        ['label' => 'About Us', 'route' => 'about-us.edit', 'active' => ['about-us.edit']],
        ['label' => 'Services', 'route' => 'services.index', 'active' => ['services.index', 'services.create', 'services.edit', 'services.section.edit']],
        ['label' => 'Why Choose Us', 'route' => 'why-choose.index', 'active' => ['why-choose.index', 'why-choose.create', 'why-choose.edit', 'why-choose.section.edit']],
    ];
    $homeRoutes = collect($homeMenus)->pluck('active')->flatten()->all();
@endphp
<ul class="nk-menu">
    <li class="nk-menu-item {{ areActiveRoutes(['dashboard']) }}">
        <a href="{{ route('dashboard') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
            <span class="nk-menu-text">Dashboard</span>
        </a>
    </li>
    <li class="nk-menu-item has-sub {{ areActiveRoutes($homeRoutes) }}">
        <a href="#" class="nk-menu-link nk-menu-toggle">
            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
            <span class="nk-menu-text">Home Page Settings</span>
        </a>
        <ul class="nk-menu-sub">
            @foreach ($homeMenus as $menu)
                <li class="nk-menu-item {{ areActiveRoutes($menu['active']) }}">
                    <a href="{{ route($menu['route']) }}" class="nk-menu-link">
                        <span class="nk-menu-text">{{ $menu['label'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['about-page.index', 'about-page.items.create', 'about-page.items.edit']) }}">
        <a href="{{ route('about-page.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-info-fill"></em></span>
            <span class="nk-menu-text">About Us Page</span>
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['contact-info.edit']) }}">
        <a href="{{ route('contact-info.edit') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-call-fill"></em></span>
            <span class="nk-menu-text">Contact Us Page</span>
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['contact-messages.index', 'contact-messages.show']) }}">
        <a href="{{ route('contact-messages.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
            <span class="nk-menu-text">Contact Messages</span>
            @php($unreadMessages = \App\Models\ContactMessage::unread()->count())
            @if ($unreadMessages)
                <span class="nk-menu-badge">{{ $unreadMessages }}</span>
            @endif
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['gallery.index', 'gallery.create', 'gallery.edit']) }}">
        <a href="{{ route('gallery.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-img-fill"></em></span>
            <span class="nk-menu-text">Products Gallery</span>
        </a>
    </li>
    <li class="nk-menu-item {{ areActiveRoutes(['settings.edit']) }}">
        <a href="{{ route('settings.edit') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
            <span class="nk-menu-text">Settings</span>
        </a>
    </li>
</ul><!-- .nk-menu -->
