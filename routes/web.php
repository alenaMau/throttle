<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['throttle:5,1'])->group(function(){
    Route::get('login', 'App\Http\Controllers\TestController@login')->name('login');
    Route::post('store', 'App\Http\Controllers\TestController@storeRegistration')->name('store');
});

Route::get('/main', 'App\Http\Controllers\TestController@index')->name('main');
Route::get('registration', 'App\Http\Controllers\TestController@registration')->name('registration');
Route::post('signin', 'App\Http\Controllers\TestController@signin')->name('signin');



Route::get('/', function () {
    return view('welcome');
});
