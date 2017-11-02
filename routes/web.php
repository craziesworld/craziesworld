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

// 前台路由组
Route::group([], function () {
    Route::get('/', 'Home\HomePageController@getIndex');
});

// 权限路由组
Auth::routes();

// 后台路由组
Route::group([], function () {
    Route::get('/admin', 'Admin\DashboardController@index');
});
