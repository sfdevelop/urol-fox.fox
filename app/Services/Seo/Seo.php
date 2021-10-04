<?php

namespace App\Services\Seo;

use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;


class Seo
{
    use SEOToolsTrait;

    public function SeoMain($seomain, $media = '')
    {

        $seomain->seo_title
            ? $seo_title = $seomain->translate(app()->getLocale(), true)->seo_title ?? $seomain->translate(app()->getLocale(), true)->title
            : $seo_title = $seomain->translate(app()->getLocale(), true)->title;

            $seo_url = $seomain->getFirstMediaUrl($media, 'thumb')

                ? $seomain->getFirstMediaUrl($media, 'thumb')
                : '/assets/i/logo.png';

        SEOMeta::setTitle($seo_title);
        SEOMeta::setDescription($seomain->translate(app()->getLocale(), true)->seo_description);
        SEOMeta::addKeyword($seomain->translate(app()->getLocale(), true)->seo_key);

        OpenGraph::setDescription($seomain->translate(app()->getLocale(), true)->seo_description);
        OpenGraph::setTitle($seo_title);
        OpenGraph::setUrl(env('APP_URL'));
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', app()->getLocale());
        OpenGraph::setSiteName(env('APP_NAME'));


        OpenGraph::addImage(env('APP_URL') . $seo_url);
        OpenGraph::addImage(['url' => env('APP_URL') . "$seo_url", 'size' => 300]);
        OpenGraph::addImage(env('APP_URL') . "$seo_url", ['width' => 300]);
    }
}
