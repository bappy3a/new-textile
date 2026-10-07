<?php

namespace App\Providers;

use App\Models\GalleryCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as ViewInstance;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.header', function (ViewInstance $view): void {
            $view->with('productMenuCategories', GalleryCategory::query()
                // ->where('is_favorite', true)
                ->orderBy('name')
                ->orderBy('id')
                ->get(['id', 'name']));
        });
    }
}
