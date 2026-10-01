<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>{{ config('app.name') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlite.css?ver=3.2.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/assets/css/theme.css?ver=3.2.3') }}">
    @yield('css')
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="{{ route('dashboard') }}" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{ asset('logo.png') }}" srcset="{{ asset('logo.png') }} 2x" alt="logo">
                            <img class="logo-dark logo-img" src="{{ asset('logo-dark.png') }}" srcset="{{ asset('logo.png') }} 2x" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small" src="{{ asset('logo.png') }}" srcset="{{ asset('logo.png') }} 2x" alt="logo-small">
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            @include('inc.sidebar')
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ asset('logo.png') }}" srcset="{{ asset('logo.png') }} 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="{{ asset('logo.png') }}" srcset="{{ asset('logo.png') }} 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->

                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-status-unverified">Admin</div>
                                                    <div class="user-name dropdown-indicator">{{ auth()->user()->name }}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <em class="icon ni ni-user-alt"></em>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ auth()->user()->name }}</span>
                                                        <span class="sub-text">{{ auth()->user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('inc.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- JavaScript -->
    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/charts/chart-ecommerce.js?ver=3.2.3') }}"></script>
    @yield('js')
</body>

</html>
