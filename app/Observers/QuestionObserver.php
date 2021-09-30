<?php

namespace App\Observers;

use App\Events\QuestionEvent;
use App\Model\Question;

class QuestionObserver
{
    /**
     * Handle the question "created" event.
     *
     * @param  \App\Model\Question  $question
     * @return void
     */
    public function created(Question $question)
    {
        event(new QuestionEvent($question));
    }
}
