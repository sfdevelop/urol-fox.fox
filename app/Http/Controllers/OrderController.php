<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\CallRequest;

class OrderController extends BaseController
{
    public function addOrder(CallRequest $request)
    {
        $this->order->addOrder($request);

        return response()->json([
            'success' => __('text_success_order'),
            'title_thanks' => __('thanks')
        ]);
    }
}
