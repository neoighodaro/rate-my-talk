<?php

namespace App\Listeners;

use App\Events\RatingCompleted;
use App\Rating;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RatingCompletedHandler
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(RatingCompleted $event)
    {
        $rating = new Rating($event->ratingData);
        $rating->save();
    }
}
