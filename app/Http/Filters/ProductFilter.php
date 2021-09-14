<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const STATUS = 'status';
    public const CATEGORY = 'category';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE=>[$this,'title'],
            self::STATUS=>[$this,'status'],
            self::CATEGORY=>[$this,'category'],
        ];
    }

    public function title ( Builder $builder, $value){
        $builder->whereTranslationLike('title', "%{$value}%");
    }

    public function status ( Builder $builder, $value){
        $builder->where('public',  "{$value}");
    }

    public function category ( Builder $builder, $value){
        $builder->where('category_id',  "{$value}");
    }

}
