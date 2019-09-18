<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'singhshivkumar90\contactform\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@showContact');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
