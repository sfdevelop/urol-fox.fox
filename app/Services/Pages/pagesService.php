<?php

namespace App\Services\Pages;

use App\Model\Pages;

class pagesService
{
    public function adminIndex()
    {
        $paginator = Pages::withTranslation()
            ->with('media')
            ->latest('id')
            ->paginate(15);

        return $paginator;
    }

    public function pagesItem($slug)
    {
//        dd($slug);
        $item = Pages::withTranslation()
            ->with('media')
            ->where('slug', $slug)
            ->firstOrFail();

        return $item;
    }
}
