<?php

namespace App\Services\Category;

use App\Model\Category;

class categoryService
{
    public function categoryIndex()
    {
        $categories = Category::whereNull('category_id')
            ->with('categories')
            ->with('media')
            ->paginate(8);

        //        $categories = Category::getCategories();

        return $categories;
    }

    public function category()
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->oldest('sort')
            ->with('media')
            ->get();

        return $categories;
    }
}