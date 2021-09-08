<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\Characteristics\characteristicsService;
use App\Services\Options\optionsService;
use App\Services\Post\postService;


class BaseController extends Controller
{
    public $post;
    public $options;
    public $character;

    /**
     * @param $post
     */
    public function __construct(postService $postService, optionsService $options, characteristicsService $character)
    {
        $this->post = $postService;
        $this->options=$options;
        $this->character=$character;
    }


}
