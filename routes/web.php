<?php

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

// Signup
Route::get('signup', 'SignupController@index');
Route::post('signup', 'SignupController@store');

// Holdings
Route::group(['prefix' => 'holdings'], function() {

    Route::get('create', 'HoldingController@create');
    Route::post('/', 'HoldingController@store');
});
