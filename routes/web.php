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

Route::resource('Artists', 'ArtistsController');
Route::resource('Lps', 'LpsController');

/*Route::get('/Artists', function () {
    return view('Artists.index');
});

Route::get('Lps/create/{id}', function () {
    return view('Lps.create');
});

Route::get('/Lps/create/{id}', 'LpsController@create');

Route::get('/Lps/create/{id}', function () {
    return view('Lps.create');
});*/

Route::get('/Lps/create/{id}', [
    'as' => 'Lps',
    'uses' => 'LpsController@create',
    function () {
        return view('Lps.create');
    }
]);

