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

Route::get('/', 'LandPageController@index')->name('home');

Route::group(['prefix' => 'angular', 'as' => 'angular.', 'middleware' => 'cors'], function(){
    Route::get('token', 'TokenController@getToken')->name('token');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::group(['prefix' => 'sobre_nos', 'as' => 'sobre_nos.'], function(){
        Route::get('/', 'SobreNosController@index')->name('index');
    });
});