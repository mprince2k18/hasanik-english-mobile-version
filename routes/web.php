<?php

use Illuminate\Support\Facades\Route;

Route::get('/t/{any}', function () {
    return view('welcome');
})->where('any','.*');

Route::get('/', 'HomeController@index')->name('homepage');

Auth::routes(['register' => false, 'login' => false]);


// test
Route::get('/test', function () {
    return 'hi';
});
