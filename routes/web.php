<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/docs', 'Api\DocumentationController@index')->name('docs');

//Route::get('/doc/{doc}', 'Api\DocumentationController@show')->name('doc');
