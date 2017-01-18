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

Route::group(['middleware' => ['web','admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function () {
    //
    Route::any('crypt', 'LoginController@encrypt');
    Route::get('info', 'IndexController@info');
    Route::get('index', 'IndexController@index');
    Route::any('add', 'IndexController@add');
    Route::any('listPage', 'IndexController@listPage');
    Route::any('tab', 'IndexController@tab');
    Route::any('img', 'IndexController@img');
    Route::any('element', 'IndexController@element');
    Route::any('pass', 'IndexController@pass');
    Route::get('logout', 'LoginController@logout');

});

Route::group(['middleware' => ['web'], 'prefix'=>'admin','namespace'=>'Admin'], function () {
    //
    Route::any('login', 'LoginController@login');
    Route::get('code', 'LoginController@code');
    Route::get('getcode', 'LoginController@getCode');
});

