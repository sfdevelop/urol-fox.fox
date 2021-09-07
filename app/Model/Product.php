<?php

namespace App\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements TranslatableContract ,HasMedia
{
    use Translatable, HasMediaTrait, Sluggable, SoftDeletes;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public $translatedAttributes = [
        'title',
        'description',
        'seo_title',
        'seo_key',
        'seo_description'
    ];

    protected $fillable = [
        'category_id',
        'price',
        'price_sale',
        'public',
        'sort',
    ];

    public function registerMediaCollections() {
        $this
            ->addMediaCollection('news')
            ->useFallbackUrl('/img/no-photo-600.jpg')
            ->useFallbackPath(public_path('/img/no-photo-600.jpg'));

        $this
            ->addMediaConversion('thumb')
            ->fit('crop', 600, 600);

        $this->addMediaConversion('thumb-p')
            ->format('webp')
            ->fit('crop', 600, 600)
            ->background('FFFFFF');
    }

}
