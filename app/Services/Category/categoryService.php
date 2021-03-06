<?php

namespace App\Services\Category;

use App\Model\Category;
use App\Model\Product;

class categoryService
{
    public function categoryIndex()
    {
        $categories = Category::whereNull('category_id')
            ->with('categories')
            ->with('media')
            ->withTranslation()
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
            ->withTranslation()
            ->get();

        return $categories;
    }

    public function parentCategory($slug)
    {
        $id_parent = Category::withTranslation()
            ->with('parentCategory')
            ->where('slug', $slug)
            ->first();

        return $id_parent;
    }

    public function subCategory($category)
    {
        $subcategory = Category::withTranslation()
            ->with('media')
            ->where('category_id', $category->id)
            ->oldest('sort')
            ->get();

        return $subcategory;
    }

    public function categoryProduct($category)
    {
        $categoryProduct = Product::withTranslation()
            ->with('media')
            ->where('category_id', $category->id)
            ->where('public', true)
            ->latest('sort')
            ->get();

        $categoryProduct = $this->allProduct($categoryProduct, $category);

        return $categoryProduct;
    }

    private function allProduct(\Illuminate\Database\Eloquent\Collection $categoryProduct, $category)
    {
        $ancestors = Category::where('category_id', '=', $category->id)->get();

        foreach ($ancestors as $item) {
            $parentProduct = Product::withTranslation()
                ->with('media')
                ->where('category_id', '=', $item->id)
                ->where('public', true)
                ->latest('sort')
                ->get();

            $categoryProduct = $categoryProduct->merge($parentProduct);
        }

        $categoryProduct = ColectionPaginate::paginate($categoryProduct, 16);

        return $categoryProduct;
    }
}
