<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use App\Events\QuestionEvent;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\PricesRequest;
use App\Http\Requests\questionRequest;
use App\Mail\SendMailPrice;
use App\Model\ContactQuestion;
use App\Model\Price;
use App\Model\Question;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class questionController extends BaseController
{

    public function store(questionRequest $request)
    {

        $this->questions->addQuestion($request);

        return response()->json(['success' => 'Ми отримали ваші дані, та вишлемо вам прайс найближчим часом']);

    }

    public function storeContact(questionRequest $request)
    {

        $message=$this->questions->addQuestionContact($request);;

//        event(new MessageEvent($message));

        return response()->json(['success' => 'Ми отримали ваші дані, та вишлемо вам прайс найближчим часом']);

    }

}
