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

Route::view('/', 'welcome');

Route::group(['prefix' => 'posts', 'as' => 'posts.'], function($router){
    $router->get('/', 'PostController@index')->name('index');
    $router->get('{post}', 'PostController@show')->name('show');
});
