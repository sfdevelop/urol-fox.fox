<?php

namespace App\Widgets;

use App\Services\Count\CountService;
use Arrilot\Widgets\AbstractWidget;

class countFeedBackWidget extends AbstractWidget
{
    private $massage;



    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @param $massage
     */
    public function __construct(CountService $massage)
    {
        $this->massage = $massage;
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $messageCount=$this->massage->countMessage();

        return view('widgets.count_feed_back_widget', [
            'config' => $this->config,
            'messageCount' => $messageCount,
        ]);
    }
}
