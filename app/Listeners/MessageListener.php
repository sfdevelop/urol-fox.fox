<?php

namespace App\Listeners;

use App\Events\MessageEvent;
use App\Model\Contact;
use App\Notifications\MessageNotification;
use App\Services\Mail\mailService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class MessageListener
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
     * @param MessageEvent $event
     * @return void
     */
    public function handle(MessageEvent $message)
    {
        $mail = $this->mailSend->mailSend();
        Notification::route('mail', $mail->email)
            ->notify(new MessageNotification($message));
    }
}
