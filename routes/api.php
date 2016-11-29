<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['prefix' => 'angular', 'middleware' => 'cors', 'as' => 'angular.', 'namespace' => 'Angular'], function(){
    Route::group(['prefix' => 'sobre_nos', 'as' => 'sobre_nos.'], function(){
        Route::get('', 'SobreNosController@index')->name('index');
        Route::post('delete', 'SobreNosController@removeSelected')->name('deleteSelected');
        Route::post('salvar', 'SobreNosController@create')->name('create');
        Route::put('atualizar/{id}', 'SobreNosController@update')->name('update');
        Route::get('icones', 'SobreNosController@icones')->name('index');
    });
    Route::group(['prefix' => 'pagina', 'as' => 'pagina.'], function(){
        Route::get('', 'PaginaController@index')->name('index');
        Route::post('delete', 'PaginaController@removeSelected')->name('deleteSelected');
        Route::post('salvar', 'PaginaController@create')->name('create');
        Route::post('upload', 'PaginaController@upload')->name('upload');
        Route::put('atualizar/{id}', 'PaginaController@update')->name('update');
    });
});