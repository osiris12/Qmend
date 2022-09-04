<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/serapapi', function(){
    $client = new GoogleSearchResults("3189fd2851e716f227e91a753bee4c613adcaaed998662c51e913719314ff076");
    $query = [
        "engine"   => "google_maps",
        "q"        => "restaurant",
        "ll"       => "@41.919613, -87.722713,20.1z",
        "search"   => "search"
    ];
    $response = $client->get_json($query);
    return json_encode($response, true);
});
