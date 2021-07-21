<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeTIcketController;
use App\Http\Controllers\PassengersController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/ticket', [TicketController::class,'store'])->middleware(App\Http\Middleware\Headers::class);
Route::get('/ticket/{id}', [TicketController::class,'show']);

Route::post('/typeTicket', [TypeTIcketController::class,'store'])->middleware(App\Http\Middleware\Headers::class);
Route::post('/passengers', [PassengersController::class,'store'])->middleware(App\Http\Middleware\Headers::class);
