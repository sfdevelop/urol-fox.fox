<?php

namespace App\Services\Order;

use App\Model\Order;

class orderService
{
    public function addOrder($request)
    {
        Order::create($request->all());
    }

    public function showOrder()
    {
        $items=Order::latest('id')
            ->paginate(15);

        return $items;
    }
    public function updateIsSee($question)
    {
        $data = [
            'is_see' => true
        ];

        $question->update($data);
    }

    public function countNewOrder()
    {
        $countOrder= Order::where('is_see',0)
            ->count();

        return $countOrder;
    }

}
