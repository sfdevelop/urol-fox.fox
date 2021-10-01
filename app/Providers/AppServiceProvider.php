<?php

namespace App\Providers;

use App\Model\Call;
use App\Model\ContactQuestion;
use App\Model\Order;
use App\Model\Post;
use App\Model\Question;
use App\Observers\CallObserver;
use App\Observers\FeedbackObserver;
use App\Observers\OrderObserver;
use App\Observers\PostObserver;
use App\Observers\QuestionObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Post::observe(PostObserver::class);
        Question::observe(QuestionObserver::class);
        ContactQuestion::observe(FeedbackObserver::class);
        Call::observe(CallObserver::class);
        Order::observe(OrderObserver::class);
    }
}
