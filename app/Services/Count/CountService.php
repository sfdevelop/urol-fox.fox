<?php

namespace App\Services\Count;

use App\Model\Call;
use App\Model\ContactQuestion;
use App\Model\Question;

class CountService
{

    public function countCall()
    {
       $countCall= Call::where('is_see',0)->count();

       return $countCall;
    }

    public function countMessage()
    {
        $messageCount= ContactQuestion::where('is_see',0)
            ->count();

       return $messageCount;
    }

    public function countQuestions()
    {
        $countQuestions= Question::where('is_see',0)
            ->count();

       return $countQuestions;
    }

}
