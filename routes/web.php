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
    return view('index');
});

Route::get('/film', function () {
    return view('film');
});

Route::get('/purchase', function () {
    return view('purchase');
});

Route::get('/cast', function () {
    return view('cast');
});

Route::get('/press', function () {
    return view('press');
});

// Group these routes
Route::get('/legal/terms', function () {
    return view('terms-of-service');
});

Route::get('/legal/privacy', function () {
    return view('privacy-policy');
});

Route::get('/contact', 'ContactController@index');
Route::post('/contact',  'ContactController@mailToAdmin'); 