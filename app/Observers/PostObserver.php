<?php

namespace App\Observers;

use App\Model\Post;
use Illuminate\Support\Carbon;

class PostObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param Post $post
     * @return void
     */
    public function created(Post $post)
    {
        //
    }

    /**
     * Handle the post "updated" event.
     *
     * @param \App\Post $post
     * @return void
     */
    public function updating(Post $post)
    {

    }

    /**
     * Handle the post "deleted" event.
     *
     * @param \App\Post $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the post "restored" event.
     *
     * @param \App\Post $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param \App\Post $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }

    public function saved(Post $post)
    {

    }


}
