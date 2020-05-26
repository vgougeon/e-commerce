<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home')->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/game/{id}', 'GameController@show')->name('game');
Auth::routes();

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', 'AdminController@panel')->name('admin');
    Route::resource('admin/users', 'UserController')->names([
        'index' => 'admin.members'
    ]);
    Route::resource('admin/games', 'GameController');
});



