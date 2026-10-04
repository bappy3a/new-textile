<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/company-profile/download', [CompanyProfileController::class, 'download'])->name('company-profile.download');
Route::post('/contact-us', [ContactMessageController::class, 'store'])->middleware('throttle:5,1')->name('contact-us.store');

Route::prefix('backend')->middleware(['auth'])->group(function () {
    require __DIR__.'/admin.php';
});

Route::get('/clier', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
})->name('clier');
