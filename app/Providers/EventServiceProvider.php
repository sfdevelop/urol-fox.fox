<?php

namespace App\Providers;

use App\Events\MessageEvent;
use App\Events\QuestionEvent;
use App\Events\CallEvent;
use App\Listeners\MessageListener;
use App\Listeners\QuestionListener;
use App\Listeners\CallListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        MessageEvent::class => [
            MessageListener::class,
        ],

        QuestionEvent::class => [
            QuestionListener::class,
        ],

        CallEvent::class => [
            CallListener::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
