<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\CreateUpdateTraits;
use App\Model\CharacteristicProduct;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    use CreateUpdateTraits;
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.admin.video');
    }

    public function addCharacteristicProduct($idProduct)
    {
        $item = new CharacteristicProduct();

        $allCharacteristic=$this->allCharacteristic();

        return view('admin.product.layouts.characteristic.edit', compact('idProduct','item', 'allCharacteristic'));
    }
}
