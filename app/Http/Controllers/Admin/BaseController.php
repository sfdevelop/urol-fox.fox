<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\Options\optionsService;
use App\Services\Post\postService;


class BaseController extends Controller
{
    public $post;
    public $options;

    /**
     * @param $post
     */
    public function __construct(postService $postService, optionsService $options)
    {
        $this->post = $postService;
        $this->options=$options;
    }


}
