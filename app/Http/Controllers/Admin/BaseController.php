<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Service;
use App\Services\Characteristics\characteristicsService;
use App\Services\Contacts\ContactsService;
use App\Services\Options\optionsService;
use App\Services\Post\postService;
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
        serviceService         $service
    )
    {
        $this->post = $postService;
        $this->options = $options;
        $this->character = $character;
        $this->slider = $slider;
        $this->contact = $contact;
        $this->service = $service;
    }
}
