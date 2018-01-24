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
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/react', function() {
    return view('test.react');
});

Route::get('/login/facebook', 'Auth\SocialiteController@redirectToProvider');
Route::get('/login/facebook/callback', 'Auth\SocialiteController@handleProviderCallback');

Route::get('/test', 'TestController@ajax');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/success/{success?}', 'DashboardController@success');
Route::get('/dashboard/error/{error?}', 'DashboardController@error');

Auth::routes();

