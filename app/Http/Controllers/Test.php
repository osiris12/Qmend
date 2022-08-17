<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Business, City, Country, HoursOfOperation, Review, State, User};


class Test extends Controller
{

    public function index()
    {
        return view('welcome', [
            'business' => Business::with('reviews', 'reviews.source')->find(1),
//            'businesses' => Business::with('reviews', 'reviews.source')->take(5)->get()
        ]);
    }
}
