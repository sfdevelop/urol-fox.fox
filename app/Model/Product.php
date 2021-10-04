<?php

namespace App\Model;

use App\Model\Traits\Filterable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements TranslatableContract ,HasMedia
{
    use Translatable, HasMediaTrait, Sluggable, SoftDeletes, Filterable;

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
        'articyl',
    ];

    public function registerMediaCollections() {
        $this
            ->addMediaCollection('news')
            ->useFallbackUrl('/img/no-photo-600.jpg')

            ->useFallbackPath(public_path('/img/no-photo-600.jpg'));

        $this->addMediaConversion('big')
            ->watermark(public_path('/img/watermark.png'))
            ->watermarkPosition(Manipulations::POSITION_CENTER);

        $this
            ->addMediaConversion('thumb')
            ->watermark(public_path('/img/watermark.png'))
            ->watermarkPosition(Manipulations::POSITION_CENTER)
            ->fit('crop', 800, 600);

        $this->addMediaConversion('thumb-p')
            ->format('webp')
            ->watermark(public_path('/img/watermark.png'))
            ->watermarkPosition(Manipulations::POSITION_CENTER)
            ->fit('crop', 800, 600)
            ->background('FFFFFF');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')
            ->withTranslation();
    }
}
