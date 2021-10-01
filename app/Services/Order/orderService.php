<?php

namespace App\Services\Order;

use App\Model\Order;

class orderService
{
    public function addOrder($request)
    {
        Order::create($request->all());
    }
}
