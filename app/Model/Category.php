<?php

namespace App\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Category extends Model implements TranslatableContract ,HasMedia
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
        'seo_title',
        'seo_key',
        'seo_description'
    ];

    protected $fillable = [
        'category_id',
        'sort',
    ];

    public function registerMediaCollections() {
        $this
            ->addMediaCollection('category')
            ->useFallbackUrl('/img/no-photo-600.jpg')
            ->useFallbackPath(public_path('/img/no-photo-600.jpg'))
            ->singleFile();

        $this
            ->addMediaConversion('thumb')
            ->fit('crop', 600, 600);

        $this->addMediaConversion('thumb-p')
            ->format('webp')
            ->fit('crop', 600, 600)
            ->background('FFFFFF');
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
    }

//    public static function getCategories() {
//        // Получаем одним запросом все разделы
//        $arr = self::orderBy('id')->withTranslation()->get();
//
//        // Запускаем рекурсивную постройку дерева и отдаем на выдачу
//        return self::buildTree($arr, 0);
//    }
//
//    public static function buildTree($arr, $pid = 0) {
//        // Находим всех детей раздела
//        $found = $arr->filter(function($item) use ($pid){return $item->parent_id == $pid; });
//
//        // Каждому детю запускаем поиск его детей
//        foreach ($found as $key => $cat) {
//            $sub = self::buildTree($arr, $cat->id);
//            $cat->sub = $sub;
//        }
//
//        return $found;
//    }
}
