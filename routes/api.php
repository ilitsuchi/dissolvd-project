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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Our first basic API with 23 movies stored into PHPmyAdmin
Route::get('/movie', 'Api\MovieController@index');



// This is the route to save users opinon (review+rating) on a movie
// STORE
Route::post('/opinion/{movie_id}', 'Api\OpinionController@store');

// // DISPLAY = INDEX
Route::get('/opinion/index/{id}', 'Api\OpinionController@index');

// // EDIT
Route::put('/opinion/{opinion_id}', 'Api\OpinionController@edit');

// // DELETE
// Route::delete('/opinion/{}', 'Api\OpinionController@delete');
