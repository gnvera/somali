<?php

Route::get('/', 'TestController@welcome')->name('home');;
Route::get('/catalogs', 'TestController@catalogs')->name('catalogs');;
Route::get('/projects', 'TestController@projects')->name('projects');;
Route::get('/contact', 'TestController@contact')->name('contact');;
Route::get('/consortium', 'TestController@consortium')->name('consortium');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');

Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');

Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function(){
	Route::get('/products', 'ProductController@index'); //Listado
	Route::get('/products/create', 'ProductController@create'); //Crear nuevo
	Route::post('/products', 'ProductController@store'); //registrar
	Route::get('/products/{id}/edit', 'ProductController@edit'); //Formulario de edición
	Route::post('/products/{id}/edit','ProductController@update'); //actualizar
	Route::delete('/products/{id}', 'ProductController@destroy'); //Form eliminar
	//admin images
	Route::get('/products/{id}/images', 'ImageController@index');
	Route::post('/products/{id}/images', 'ImageController@store');
	Route::delete('/products/{id}/images', 'ImageController@destroy');
	Route::get('/products/{id}/images/select/{image}', 'ImageController@select');//Feature image
});



//Put patch delete

 