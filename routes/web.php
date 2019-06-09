<?php


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'BackEnd', 'prefix' =>  'admin'], function(){
 
   Route::get('/', 'Home@index');
   Route::resource('users', 'UsersController')->except(['show']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
