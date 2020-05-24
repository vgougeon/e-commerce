<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('/');

Route::get('/admin', function () { return view('home'); })->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
