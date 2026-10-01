<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="./images/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href={{ asset('admin/assets/css/dashlite.css?ver=3.2.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/assets/css/theme.css?ver=3.2.3') }}">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="{{ route('home') }}" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ asset('logo.png') }}" srcset="{{ asset('logo.png') }} 2x" alt="{{ config('app.name') }}">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ asset('logo.png') }}" srcset="{{ asset('logo.png') }} 2x" alt="{{ config('app.name') }}">
                            </a>
                        </div>
                        <div class="card">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.2.3') }}"></script>
</html>
