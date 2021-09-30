<?php

namespace App\Services\Menu;

use App\Model\Category;
use App\Model\Contact;
use App\Model\Service;

class menuService
{
    public function categories()
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->withTranslation()
            ->get();

        return $categories;
    }

    public function services()
    {
        $services = Service::withTranslation()
            ->oldest()
            ->get();

        return $services;
    }

    public function headPhone()
    {
        $head_phone = Contact::first('phone1');

        return $head_phone;
    }
}
