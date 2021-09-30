<?php

namespace App\Observers;

use App\Events\MessageEvent;
use App\Model\ContactQuestion;

class FeedbackObserver
{
    /**
     * Handle the contact question "created" event.
     *
     * @param  \App\=Model\ContactQuestion  $contactQuestion
     * @return void
     */
    public function created(ContactQuestion $contactQuestion)
    {
        event(new MessageEvent($contactQuestion));
    }
}
