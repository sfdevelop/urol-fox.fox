<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Service;
use App\Services\Category\categoryService;
use App\Services\Characteristics\characteristicsService;
use App\Services\Contacts\ContactsService;
use App\Services\Options\optionsService;
use App\Services\Order\orderService;
use App\Services\Pages\pagesService;
use App\Services\Post\postService;
use App\Services\Product\productService;
use App\Services\Quest\questService;
use App\Services\Service\serviceService;
use App\Services\slider\sliderService;


class BaseController extends Controller
{
    public $post;
    public $options;
    public $character;
    public $slider;
    public $contact;
    public $service;
    public $category;
    public $product;
    public $pages;
    public $questions;
    public $order;

    /**
     * @param $post
     */
    public function __construct
    (
        postService            $postService,
        optionsService         $options,
        characteristicsService $character,
        sliderService          $slider,
        ContactsService        $contact,
        serviceService         $service,
        categoryService        $category,
        productService         $product,
        pagesService           $pages,
        questService           $questions,
        orderService           $order

    )
    {
        $this->post = $postService;
        $this->options = $options;
        $this->character = $character;
        $this->slider = $slider;
        $this->contact = $contact;
        $this->service = $service;
        $this->category = $category;
        $this->product = $product;
        $this->pages = $pages;
        $this->questions = $questions;
        $this->order = $order;
    }
}
