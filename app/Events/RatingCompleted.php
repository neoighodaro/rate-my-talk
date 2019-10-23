<?php

namespace App\Events;

use App\Rating;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

final class RatingCompleted
{
    use Dispatchable, SerializesModels;

    /** @var Rating $rating */
    public $rating;

    public function __construct(Rating $rating)
    {
        $this->rating = $rating;
    }
}
