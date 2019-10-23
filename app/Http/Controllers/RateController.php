<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;
use App\Events\RatingCompleted;

final class RateController extends Controller
{
    public function create()
    {
        return view('rate');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'rating' => 'required|in:meh,good',
            'comment' => 'nullable|string|max:5000',
        ]);

        $rating = Rating::create($data);

        event(new RatingCompleted($rating));

        return response()->json(['status' => 'success']);
    }
}
