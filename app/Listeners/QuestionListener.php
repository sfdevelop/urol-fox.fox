<?php

namespace App\Listeners;

use App\Events\MessageEvent;
use App\Events\QuestionEvent;
use App\Model\Contact;
use App\Notifications\QuestionNotification;
use App\Services\Mail\mailService;
use Illuminate\Support\Facades\Notification;

class QuestionListener
{

    public $message;
    public $mailSend;

    /**
     * @param $mailSend
     */
    public function __construct(mailService $mailSend)
    {
        $this->mailSend = $mailSend;
    }


    /**
     * Handle the event.
     *
     * @param QuestionEvent $event
     * @return void
     */
    public function handle(QuestionEvent $message)
    {
        $mail = $this->mailSend->mailSend();
        Notification::route('mail', $mail->email)
            ->notify(new QuestionNotification($message));
    }
}
