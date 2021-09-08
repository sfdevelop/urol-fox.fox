<?php

namespace App\Services\Product;

use App\Model\Product;
use Spatie\MediaLibrary\Models\Media;

class productService
{
    public function indexProduct()
    {
        $paginator = Product::with('media')
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
    }
}
