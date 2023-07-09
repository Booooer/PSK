<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/v1/create',"App\Http\Controllers\OfferController@createOffer")
->middleware('authApi');

Route::post('/v1/update',"App\Http\Controllers\OfferController@updateOffer")
->middleware('authApi');


Route::post('/v1/item/create',"App\Http\Controllers\OfferController@createItem")
->middleware('authApi');

Route::get('/v1/item/delete',"App\Http\Controllers\OfferController@deleteItem")
->middleware('authApi');
