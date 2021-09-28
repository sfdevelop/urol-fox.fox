<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BaseController;
use App\Model\Slider;
use Illuminate\Http\Request;

class urolController extends BaseController
{


    public function index()
    {
        $slider = $this->slider->mainSlider();
        $newProductMonth = $this->slider->newProduct();
        $saleProducts = $this->slider->saleProduct();
        $contactsPhone = $this->slider->contactsPhone();
        $serviceMain = $this->slider->serviceMain();
        $newsLatest = $this->slider->newsLatest();

        return view('urol.main',
            compact(
                'slider',
                'newProductMonth',
                'saleProducts',
                'contactsPhone',
                'serviceMain',
                'newsLatest'
            ));
    }

    public function contacts()
    {
        $contact = $this->contact->ContactFoot();

        return view('urol.Contacts.contacts', compact('contact'));
    }

    public function news()
    {
        $paginator = $this->post->indexPost();

        return view('urol.News.news', compact('paginator'));
    }

    public function item($slug)
    {

        $item = $this->post->item($slug);
        $latest = $this->post->latestNews();

        return view('urol.News.item',
            compact(
                'item',
                'latest'
            )
        );
    }

    public function service($slug)
    {
        $item=$this->service->itemService($slug);

        return view('urol.Service.service', compact('item'));
    }
}
