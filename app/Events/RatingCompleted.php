<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Rating;

class RatingCompleted
{
    use Dispatchable, SerializesModels;

    /** @var Rating $rating */
    public $rating;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Rating $rating)
    {
        $this->rating = $rating;
    }
}
