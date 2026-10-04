<?php

namespace App\Http\Controllers;

use App\Models\AboutPageSection;
use App\Models\AboutUs;
use App\Models\ContactInfo;
use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use App\Models\GallerySection;
use App\Models\HeroInfo;
use App\Models\Service;
use App\Models\ServiceSection;
use App\Models\Slider;
use App\Models\WhyChooseItem;
use App\Models\WhyChooseSection;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $sliders = Slider::active()->get();
        $heroInfo = HeroInfo::first();
        $about = AboutUs::first();
        $services = Service::active()->get();
        $serviceSection = ServiceSection::first();
        $galleryImages = GalleryImage::onHome()->get();
        $gallerySection = GallerySection::first();
        $whyChoose = WhyChooseSection::first();
        $whyChooseItems = WhyChooseItem::active()->get();

        return view('index', compact('sliders', 'heroInfo', 'about', 'services', 'serviceSection', 'galleryImages', 'gallerySection', 'whyChoose', 'whyChooseItems'));
    }

    public function aboutUs()
    {
        $sections = AboutPageSection::where('is_active', true)
            ->with(['items' => fn ($query) => $query->active()])
            ->get()
            ->keyBy('key');

        return view('about-us', compact('sections'));
    }

    public function products(Request $request): View
    {
        $selectedCategory = $request->filled('category')
            ? GalleryCategory::query()->findOrFail($request->integer('category'))
            : null;

        $galleryImages = GalleryImage::query()
            ->active()
            ->when(
                $selectedCategory,
                fn (Builder $query): Builder => $query->whereBelongsTo($selectedCategory, 'category'),
            )
            ->paginate(9)
            ->withQueryString();

        return view('products', compact('galleryImages', 'selectedCategory'));
    }

    public function contactUs()
    {
        $contact = ContactInfo::first();

        return view('contact-us', compact('contact'));
    }
}
