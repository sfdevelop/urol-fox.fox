<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\CallRequest;
use App\Http\Requests\questionRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class questionController extends BaseController
{

    public function store(questionRequest $request)
    {

        $this->questions->addQuestion($request);

        return response()->json([
            'success' => __('text_success_question'),
            'title_thanks' => __('thanks')
        ]);

    }

    public function storeContact(questionRequest $request)
    {

        $this->questions->addQuestionContact($request);

        return response()->json([
            'success' => __('text_success_question'),
            'title_thanks' => __('thanks')
        ]);

    }

    public function call(CallRequest $request)
    {

        $this->questions->addCall($request);

        return response()->json([
            'success' => __('text_success_call'),
            'title_thanks' => __('thanks')
        ]);

    }

}
