<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Events\RatingCompleted;
use App\Rating;
use Illuminate\Http\Request;

final class RateController extends Controller
{
    public function create()
    {
        return view('rate');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'comment' => 'nullable|string|max:5000',
            'rating' => 'required|in:meh,good',
        ]);

        event(new RatingCompleted($data));

        return response()->json(['status' => 'success']);
    }
}
