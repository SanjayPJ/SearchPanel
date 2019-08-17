<?php

use Illuminate\Http\Request;
use App\User;

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

Route::get('/users', function (Request $request) {
    return User::all();
});

Route::get('/users/{q}', function (Request $request, $q) {
    return User::where('name', 'LIKE', "%$q%")->get();
});