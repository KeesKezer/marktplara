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

Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('register', function()
{
    return View::make('pages.register');
});
Route::get('bied', function()
{
    return View::make('pages.bied');
});
Route::get('advertentie', function()
{
    return View::make('pages.advert');
});
