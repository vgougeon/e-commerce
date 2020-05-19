<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
