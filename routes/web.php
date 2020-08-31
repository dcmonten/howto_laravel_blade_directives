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
    return view('views.welcome');
});
Route::get('/fancy_css', function () {
    return view('views.fancy_css');
});
Route::get('/reusable_comps', function () {
    return view('views.reusable_components');
});