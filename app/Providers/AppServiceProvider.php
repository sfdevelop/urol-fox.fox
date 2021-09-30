<?php

namespace App\Providers;

use App\Model\ContactQuestion;
use App\Model\Post;
use App\Model\Question;
use App\Observers\FeedbackObserver;
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
    }
}
