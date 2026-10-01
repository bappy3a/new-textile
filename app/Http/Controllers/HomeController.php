<?php

namespace App\Http\Controllers;

use App\Models\AboutPageSection;
use App\Models\AboutUs;
use App\Models\ContactInfo;
use App\Models\GalleryImage;
use App\Models\GallerySection;
use App\Models\HeroInfo;
use App\Models\Service;
use App\Models\ServiceSection;
use App\Models\Slider;
use App\Models\WhyChooseItem;
use App\Models\WhyChooseSection;
use Illuminate\Contracts\Support\Renderable;

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

    public function products()
    {
        $galleryImages = GalleryImage::active()->orderBy('sort_order', 'desc')->get();

        return view('products', compact('galleryImages'));
    }

    public function contactUs()
    {
        $contact = ContactInfo::first();

        return view('contact-us', compact('contact'));
    }
}
