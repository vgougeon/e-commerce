<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

Route::middleware(['cart'])->group(function () {
    Route::get('/', 'MainController@home')->name('/');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/game/{id}', 'GameController@show')->name('game');
    Route::get('/profile/{id}', 'MainController@profile')->name('profile');
    Route::get('/editprofile/{id}', 'MainController@edit')->name('profile.edit');
    Route::put('/editprofile/update/{user}', 'MainController@update')->name('main.update');
    Route::resource('/cart', 'CartController');
    Route::post('cart/add/{id}', 'CartController@add')->name('cart.add');
    Route::post('cart/empty', 'CartController@empty')->name('cart.empty');
    Route::post('cart/remove/{id}', 'CartController@remove')->name('cart.remove');
    Route::post('cart/setQuantity/{id}', 'CartController@setQuantity')->name('cart.setQuantity');
    Route::post('cart/pay', 'CartController@pay')->name('cart.pay');
    Route::get('/send-mail', function () {
        Mail::to('newuser@example.com')->send(new MailtrapExample());
        return 'A message has been sent to Mailtrap!';
    });
    Auth::routes();
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', 'AdminController@panel')->name('admin');
        Route::resource('admin/users', 'UserController')->names([
            'index' => 'admin.members'
        ]);
        Route::resource('admin/games', 'GameController');
    });
});







