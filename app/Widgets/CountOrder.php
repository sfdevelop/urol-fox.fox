<?php

namespace App\Widgets;

use App\Model\Order;
use App\Services\Order\orderService;
use Arrilot\Widgets\AbstractWidget;

class CountOrder extends AbstractWidget
{
    private $order;

    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @param $order
     */
    public function __construct(orderService $order)
    {
        $this->order = $order;
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $countOrder=$this->order->countNewOrder();

        return view('widgets.count_order', [
            'config' => $this->config,
            'countOrder' => $countOrder,
        ]);
    }
}
