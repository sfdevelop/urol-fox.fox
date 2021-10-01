<?php

namespace App\Observers;

use App\Events\CallEvent;
use App\Model\Call;

class CallObserver
{
    /**
     * Handle the call "created" event.
     *
     * @param  \App\Model\Call  $call
     * @return void
     */
    public function created(Call $call)
    {
        event(new CallEvent($call));
    }

    /**
     * Handle the call "updated" event.
     *
     * @param  \App\Model\Call  $call
     * @return void
     */
    public function updated(Call $call)
    {
        //
    }

    /**
     * Handle the call "deleted" event.
     *
     * @param  \App\Model\Call  $call
     * @return void
     */
    public function deleted(Call $call)
    {
        //
    }

    /**
     * Handle the call "restored" event.
     *
     * @param  \App\Model\Call  $call
     * @return void
     */
    public function restored(Call $call)
    {
        //
    }

    /**
     * Handle the call "force deleted" event.
     *
     * @param  \App\Model\Call  $call
     * @return void
     */
    public function forceDeleted(Call $call)
    {
        //
    }
}
