<?php

namespace Modules\Email\Listeners;

use App\Events\RatingCompleted;

final class EmailAdministrator
{
    public function handle(RatingCompleted $event)
    {
        // Queue an email to the user
        info('Send the email');
    }
}
