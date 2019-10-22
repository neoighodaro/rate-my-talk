<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

final class Rating extends Model
{
    protected $fillable = ['rating', 'comment'];
}
