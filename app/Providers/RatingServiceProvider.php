<?php

namespace App\Providers;

use App\Events\RatingCompleted;
use App\Listeners\RatingCompletedHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Illuminate\Support\Facades\Event;

class RatingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(RatingCompleted::class, RatingCompletedHandler::class);
    }
}
