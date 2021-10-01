<?php

namespace App\Observers;

use App\Events\OrderEvent;
use App\Model\Order;

class OrderObserver
{
    /**
     * Handle the order "created" event.
     *
     * @param  \App\Model\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        event(new OrderEvent($order));
    }
}
