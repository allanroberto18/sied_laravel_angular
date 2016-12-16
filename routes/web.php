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



Route::group(['prefix' => 'angular', 'as' => 'angular.', 'middleware' => 'cors'], function(){
    Route::get('token', 'TokenController@getToken')->name('token');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('logout', 'DashboardController@logout')->name('logout');
});

Auth::routes();

Route::get('/', 'LandPageController@index')->name('home');
Route::get('/producao', 'LandPageController@producao')->name('producao');
