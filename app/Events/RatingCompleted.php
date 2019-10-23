<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Rating;

class RatingCompleted
{
    use Dispatchable, SerializesModels;

    /** @var Array $ratingData */
    public $ratingData;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(array $ratingData)
    {
        $this->ratingData = $ratingData;
    }
}
