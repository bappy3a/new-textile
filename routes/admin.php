<?php

use App\Http\Controllers\AboutPageItemController;
use App\Http\Controllers\AboutPageSectionController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroInfoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceSectionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\WhyChooseItemController;
use App\Http\Controllers\WhyChooseSectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
Route::resource('sliders', SliderController::class)->except('show');
Route::get('hero-info', [HeroInfoController::class, 'edit'])->name('hero-info.edit');
Route::put('hero-info', [HeroInfoController::class, 'update'])->name('hero-info.update');
Route::get('about-us', [AboutUsController::class, 'edit'])->name('about-us.edit');
Route::put('about-us', [AboutUsController::class, 'update'])->name('about-us.update');
Route::get('services/section', [ServiceSectionController::class, 'edit'])->name('services.section.edit');
Route::put('services/section', [ServiceSectionController::class, 'update'])->name('services.section.update');
Route::resource('services', ServiceController::class)->except('show');
Route::put('gallery/section', [GalleryController::class, 'updateSection'])->name('gallery.section.update');
Route::resource('gallery', GalleryController::class)->except('show');
Route::get('why-choose/section', [WhyChooseSectionController::class, 'edit'])->name('why-choose.section.edit');
Route::put('why-choose/section', [WhyChooseSectionController::class, 'update'])->name('why-choose.section.update');
Route::resource('why-choose', WhyChooseItemController::class)->except('show');

Route::get('about-page', [AboutPageSectionController::class, 'index'])->name('about-page.index');
Route::put('about-page/sections/{key}', [AboutPageSectionController::class, 'update'])->name('about-page.sections.update');
Route::resource('about-page/items', AboutPageItemController::class)->except('index', 'show')->names('about-page.items');
