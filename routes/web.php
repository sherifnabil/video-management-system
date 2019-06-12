<?php


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'BackEnd', 'prefix' =>  'admin'], function(){
 
   Route::get('home', 'Home@index')->name('admin.home');
   Route::resource('users', 'UsersController')->except(['show']);
   Route::resource('categories', 'Categories')->except(['show']);
   Route::resource('skills', 'Skills')->except(['show']);
   Route::resource('tags', 'Tags')->except(['show']);
   Route::resource('pages', 'Pages')->except(['show']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
