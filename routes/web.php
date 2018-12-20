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

Route::get('/', 'AdvertentieController@index');
Route::get('register', function()
{
    return View::make('views.home');
});
Route::get('bied', function()
{
    return View::make('pages.bied');
});
Route::get('advertentie', function()
{
    return View::make('pages.advert');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
