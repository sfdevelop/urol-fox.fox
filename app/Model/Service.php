<?php

namespace App\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Service extends Model implements TranslatableContract ,HasMedia
{
    use Translatable, HasMediaTrait, Sluggable;

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

        'public',
        'sort',

    ];

    public function registerMediaCollections() {
        $this
            ->addMediaCollection('service')
            ->useFallbackUrl('/img/no-photo.jpg')
            ->useFallbackPath(public_path('/img/no-photo.jpg'))
            ->singleFile();

        $this
            ->addMediaConversion('thumb')
            ->fit('crop', 1920, 600);

        $this->addMediaConversion('thumb-p')
            ->format('webp')
            ->fit('crop', 1920, 600)
            ->background('FFFFFF');
    }
}
