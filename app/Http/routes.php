<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


// dashboard routes
Route::get('dashboard', 'DashboardController@index');
Route::get('videos', 'DashboardController@videos');
Route::get('playlists', 'DashboardController@playlists');
Route::get('analytics', 'DashboardController@nalytics');

Route::get('profile', 'UserController@profile');

Route::get('settings', 'AdminController@settings');