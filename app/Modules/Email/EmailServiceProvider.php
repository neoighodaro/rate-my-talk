<?php

namespace Modules\Email;

use App\Events\RatingCompleted;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Modules\Email\Listeners\EmailAdministrator;

class EmailServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerEventListeners();
    }

    private function registerEventListeners(): void
    {
        Event::listen(RatingCompleted::class, EmailAdministrator::class);
    }
}
