<?php

namespace App\Services\Product;

use App\Model\Product;

class productService
{
    public function indexProduct()
    {
        $paginator=Product::with('media')
            ->withTranslation()
            ->paginate(15);

        return $paginator;
    }
}
