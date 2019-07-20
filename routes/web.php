<?php

Route::get('/', 'TestController@welcome')->name('home');;
Route::get('/catalogs', 'TestController@catalogs')->name('catalogs');;
Route::get('/projects', 'TestController@projects')->name('projects');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 