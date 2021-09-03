<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\Post\postService;


class BaseController extends Controller
{
    public $post;

    /**
     * @param $post
     */
    public function __construct(postService $postService)
    {
        $this->post = $postService;
    }


}
