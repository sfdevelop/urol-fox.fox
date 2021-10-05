<?php

namespace App\Widgets;

use App\Model\Call;
use App\Services\Count\CountService;
use Arrilot\Widgets\AbstractWidget;

class CountCall extends AbstractWidget
{
    public $count;


    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @param $count
     */
    public function __construct(CountService $count)
    {
        $this->count = $count;
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $countCall=$this->count->countCall();

        return view('widgets.count_call', [
            'config' => $this->config,
            'countCall' => $countCall,
        ]);
    }
}
