<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Business, City, Country, HoursOfOperation, Review, State, User};


class Test extends Controller
{

    public function index()
    {
        return view('welcome', [
            'businesses' => Business::with('reviews')->find(1)->toJson(JSON_PRETTY_PRINT)
        ]);
    }
}
