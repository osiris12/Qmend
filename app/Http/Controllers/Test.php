<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Business, City, Country, HoursOfOperation, Review, State, User};


class Test extends Controller
{

    public function index($id = 2)
    {
        return view('welcome', [
            'business' => Business::with('reviews', 'reviews.source')->find($id),
            'json' => Business::with('reviews', 'reviews.source')->find($id)->toJson(JSON_PRETTY_PRINT)
//            'businesses' => Business::with('reviews', 'reviews.source')->take(5)->get()
        ]);
    }
}
