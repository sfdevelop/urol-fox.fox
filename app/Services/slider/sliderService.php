<?php

namespace App\Services\slider;

use App\Model\Category;
use App\Model\Contact;
use App\Model\Post;
use App\Model\Product;
use App\Model\Service;
use App\Model\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class sliderService
{

    private $countDate;

    public function __construct()
    {
        $this->countDate = 30;
    }

    public function indexSlider()
    {
        $paginator = Slider::withTranslation()
            ->with('media')
            ->translated('en')
            ->oldest('sort')
            ->latest('id')
            ->paginate(15);

        return $paginator;
    }

    public function mainSlider()
    {
        $slider = Slider::with('media')
            ->withTranslation()
            ->oldest('sort')
            ->get();

        return $slider;
    }

    public function newProduct()
    {
        $contNewProduct = Product::where(
            'created_at', '>=', Carbon::now()->subDays($this->countDate)->toDateTimeString()
        )->count();

        $contNewProduct > 0
            ?
            $newProductMonth = Product::where(
                'created_at', '>=', Carbon::now()->subDays($this->countDate)->toDateTimeString()
            )
                ->with('media')
                ->withTranslation()
                ->where('public', true)
                ->whereNull('price_sale')
                ->take(16)
                ->get()
            :
            $newProductMonth = Product::orderBy(DB::raw('RAND()'))
                ->with('media')
                ->withTranslation()
                ->where('public', true)
                ->whereNull('price_sale')
                ->take(16)
                ->get();

        return $newProductMonth;
    }

    public function saleProduct()
    {
        $saleProducts = Product::with('media')
            ->withTranslation()
            ->whereNotNull('price_sale')
            ->where('public', true)
            ->take(16)
            ->latest('id')
            ->get();

        return $saleProducts;
    }

    public function contactsPhone()
    {
        $contactsPhone = Contact::get('phone1', 'phone2', 'phone3');

        return $contactsPhone;
    }

    public function serviceMain()
    {
        $serviceMain = Service::withTranslation()
            ->where('public', true)
            ->firstOrFail();

        return $serviceMain;
    }

    public function newsLatest()
    {
        $newsLatest=Post::withTranslation()
        ->where('public', true)
        ->latest('id')
        ->take(15)
        ->get();

        return $newsLatest;
    }

}
