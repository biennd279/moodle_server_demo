<?php

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

Route::group([
    'middleware' => ['auth.jwt'],
    'prefix' => 'auth'
], function () {

    Route::post('login', 'App\Http\Controllers\AuthController@login')
        ->withoutMiddleware('auth.jwt');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');

});

Route::apiResources([
    "users" => \App\Http\Controllers\UserController::class,
    "courses" => \App\Http\Controllers\CourseController::class,
    "courses.contents" => \App\Http\Controllers\ContentController::class,
]);

Route::get(
    "courses/{course}/teacher",
    "\App\Http\Controllers\CourseController@teacher",
);