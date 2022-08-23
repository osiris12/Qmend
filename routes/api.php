<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ReviewController;
use App\Http\Resources\BusinessCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::middleware('auth:sanctum')->group(function () {
//    Route::resource('business', BusinessController::class);
//});

Route::resource('business', BusinessController::class);
Route::resource('review', ReviewController::class);
