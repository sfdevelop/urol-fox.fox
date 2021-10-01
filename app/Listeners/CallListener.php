<?php

namespace App\Listeners;

use App\Events\CallEvent;
use App\Events\MessageEvent;
use App\Notifications\CallNotification;
use App\Notifications\MessageNotification;
use App\Services\Mail\mailService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class CallListener
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
     * @param  CallEvent  $event
     * @return void
     */
    public function handle(CallEvent $message)
    {
        $mail = $this->mailSend->mailSend();
        Notification::route('mail', $mail->email)
            ->notify(new CallNotification($message));
    }
}
