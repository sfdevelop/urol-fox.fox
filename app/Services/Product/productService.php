<?php

namespace App\Services\Product;

use App\Http\Filters\ProductFilter;
use App\Model\CharacteristicProduct;
use App\Model\Product;
use Spatie\MediaLibrary\Models\Media;

class productService
{
    public function indexProduct($request)
    {
//        $paginator = Product::with('media')
//            ->withTranslation()
//            ->with('category')
//            ->latest('sort')
//            ->paginate(15);

        $data = $request->all();

        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);
        $paginator = Product::Filter($filter)
            ->with('media')
            ->withTranslation()
            ->with('category')
            ->latest('sort')
            ->paginate(15);

        return $paginator;
    }

    public function deleteImage($request)
    {
        if ($request->has('imageDelete')) {
            foreach ($request->imageDelete as $id) {
                Media::findOrFail($id)->delete();
            }
        }

        $this->deleteCharacter($request);
    }

    public function deleteCharacter($request)
    {
        if ($request->has('characterDelete')) {
            foreach ($request->characterDelete as $id) {
                CharacteristicProduct::findOrFail($id)->delete();
            }
        }
    }

    public function show_characteristics($id)
    {
        $character = CharacteristicProduct::with('characteristic')
            ->withTranslation()
            ->where('product_id', $id)
            ->get()
            ->sortBy(function ($CharacteristicsSort) {
                return $CharacteristicsSort->characteristic->sort;
            });;

        return $character;
    }
}
