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

Route::get('/','StaticPagesController@home')->name("home");
Route::get('/help','StaticPagesController@help')->name("help");
Route::get('/about','StaticPagesController@about')->name("about");

#注册、登录方面
Route::get("signup",'UsersController@create')->name('signup');
#第一个参数为资源名称，第二个参数为控制器名称
Route::resource('users','UsersController');

#用户登录方面
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
