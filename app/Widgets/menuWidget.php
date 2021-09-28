<?php

namespace App\Widgets;

use App\Services\Menu\menuService;
use Arrilot\Widgets\AbstractWidget;

class menuWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    public $menu;

    /**
     * @param $menu
     */
    public function __construct( menuService $menu)
    {
        $this->menu = $menu;
    }


    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {

        $categories=$this->menu->categories();
        $services=$this->menu->services();

        return view('widgets.menu_widget', [
            'config' => $this->config,
            'categories' => $categories,
            'services' => $services,
        ]);
    }
}
