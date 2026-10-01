<?php

// highlights the selected navigation on admin panel

use App\Models\Setting;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

if (! function_exists('areActiveRoutes')) {
    function areActiveRoutes(array $routes, $output = 'active current-page')
    {
        if (in_array(Route::currentRouteName(), $routes)) {
            return $output;
        }

        return null;
    }
}
// highlights the selected navigation on admin panel
if (! function_exists('areActiveRoutesRequest')) {
    function areActiveRoutesRequest(array $routes, $output = 'active current-page')
    {
        foreach ($routes as $route) {
            if (Request::is($route) == $route) {
                return $output;
            }
        }

        return null;
    }
}

if (! function_exists('setting')) {
    function setting(string $key, mixed $default = null): mixed
    {
        return Setting::get($key, $default);
    }
}
