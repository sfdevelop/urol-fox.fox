<?php

namespace App\Listeners;

use App\Events\OrderEvent;
use App\Notifications\CallNotification;
use App\Notifications\OrderNotification;
use App\Services\Mail\mailService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class OrderListener
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
     * @param  OrderEvent  $event
     * @return void
     */
    public function handle(OrderEvent $message)
    {
        $mail = $this->mailSend->mailSend();
        Notification::route('mail', $mail->email)
            ->notify(new OrderNotification($message));
    }
}
