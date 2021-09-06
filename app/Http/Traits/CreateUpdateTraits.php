<?php

namespace App\Http\Traits;

use App\Model\Category;

trait CreateUpdateTraits
{
    public function createUpdate($request, $id)
    {
        ($id == null)
            ?
            $item = $this->model->Create($request->all())
            :
            $item = $this->model->find($id)->update($request->all());

        return $item;
    }

    public function categoryTrait()
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->oldest('sort')
            ->get();

        return $categories;
    }
}
