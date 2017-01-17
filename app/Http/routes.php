<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/', 'IndexController@index');
    Route::any('admin/login', 'Admin\LoginController@login');
    Route::get('admin/code', 'Admin\LoginController@code');
    Route::get('admin/getcode', 'Admin\LoginController@getCode');
    Route::any('admin/crypt', 'Admin\LoginController@encrypt');
    Route::any('admin/info', 'Admin\IndexController@info');
    Route::any('admin/index', 'Admin\IndexController@index');
    Route::any('admin/add', 'Admin\IndexController@add');
    Route::any('admin/listPage', 'Admin\IndexController@listPage');
    Route::any('admin/tab', 'Admin\IndexController@tab');
    Route::any('admin/img', 'Admin\IndexController@img');
    Route::any('admin/element', 'Admin\IndexController@element');
    Route::any('admin/pass', 'Admin\IndexController@pass');


});
