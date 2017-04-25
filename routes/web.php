<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/**
 * 分类
 */
Route::get('category/tree/view', 'CategoryController@manageCategory');
Route::post('add/category', ['as'=>'add.category', 'uses'=>'CategoryController@addCategory']);
