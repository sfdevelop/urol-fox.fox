<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class SaleController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $items = Product::withTranslation()
            ->wherePublic(true)
            ->with('media')
            ->whereNotNull('price_sale')
            ->latest('updated_at')
            ->paginate(18);

        return view('urol.Sale.sale', compact('items'));
    }
}
