<?php

namespace App\Services\slider;

use App\Model\Category;
use App\Model\Contact;
use App\Model\Pages;
use App\Model\Post;
use App\Model\Product;
use App\Model\Service;
use App\Model\Slider;
use App\Services\Seo\Seo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class sliderService
{

    private $countDate;
    private $seo;

    public function __construct( Seo $seo)
    {
        $this->countDate = 30;
        $this->seo=$seo;
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

        if ($saleProducts->count()<1){
            $saleProducts=$this->hitProduct();
        }

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

    public function seoData($id)
    {
        $seo=Pages::withTranslation()
            ->where('id',$id)
            ->firstOrFail();
        $this->seo->SeoMain($seo);
        return $seo;
    }

    public function seoSlug($slug)
    {
        $seo=Pages::withTranslation()
            ->where('slug',$slug)
            ->firstOrFail();
        $this->seo->SeoMain($seo, 'pages');
        return $seo;
    }

    private function hitProduct()
    {
        $saleProducts = Product::orderBy(DB::raw('RAND()'))
            ->with('media')
            ->withTranslation()
            ->where('public', true)
            ->whereNotNull('price_sale')
            ->take(4)
            ->get();

        return $saleProducts;
    }

}
