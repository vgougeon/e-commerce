<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

Route::get('/', 'MainController@home')->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/game/{id}', 'GameController@show')->name('game');
Route::get('/profile/{id}', 'MainController@profile')->name('profile');
Route::get('/editprofile/{id}', 'MainController@edit');
Route::post('/editprofile/update', 'MainController@update')->name('main.update');
Auth::routes();
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', 'AdminController@panel')->name('admin');
    Route::resource('admin/users', 'UserController')->names([
        'index' => 'admin.members'
    ]);
    Route::resource('admin/games', 'GameController');
});
Route::get('/send-mail', function () {

    Mail::to('newuser@example.com')->send(new MailtrapExample());

    return 'A message has been sent to Mailtrap!';

});
