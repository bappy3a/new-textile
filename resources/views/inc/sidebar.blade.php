@php
    $homeMenus = [
        ['label' => 'Sliders', 'route' => 'sliders.index', 'active' => ['sliders.index', 'sliders.create', 'sliders.edit']],
        ['label' => 'Hero Info', 'route' => 'hero-info.edit', 'active' => ['hero-info.edit']],
        ['label' => 'About Us', 'route' => 'about-us.edit', 'active' => ['about-us.edit']],
        ['label' => 'Services', 'route' => 'services.index', 'active' => ['services.index', 'services.create', 'services.edit', 'services.section.edit']],
        ['label' => 'Gallery', 'route' => 'gallery.index', 'active' => ['gallery.index', 'gallery.create', 'gallery.edit']],
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
</ul><!-- .nk-menu -->
