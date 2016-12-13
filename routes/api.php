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
    
    Route::group(['prefix' => 'pagina', 'as' => 'pagina.'], function(){
        Route::get('', 'PaginaController@index')->name('index');
        Route::post('delete', 'PaginaController@removeSelected')->name('deleteSelected');
        Route::post('salvar', 'PaginaController@create')->name('create');
        Route::post('upload', 'PaginaController@upload')->name('upload');
        Route::put('atualizar/{id}', 'PaginaController@update')->name('update');
        Route::group(['prefix' => 'caracteristica', 'as' => 'caracteristica.'], function(){
            Route::get('{paginaId}', 'PaginaCaracteristicaController@index')->name('index');
            Route::post('delete', 'PaginaCaracteristicaController@removeSelected')->name('deleteSelected');
            Route::post('salvar', 'PaginaCaracteristicaController@create')->name('create');
            Route::put('atualizar/{id}', 'PaginaCaracteristicaController@update')->name('update');
        });
        Route::group(['prefix' => 'banner', 'as' => 'banner.'], function(){
            Route::get('{paginaId}', 'BannerController@index')->name('index');
            Route::post('delete', 'BannerController@removeSelected')->name('deleteSelected');
            Route::post('salvar', 'BannerController@create')->name('create');
            Route::post('upload', 'BannerController@upload')->name('upload');
            Route::put('atualizar/{id}', 'BannerController@update')->name('update');
        });
        Route::group(['prefix' => 'video', 'as' => 'video.'], function(){
            Route::get('{paginaId}', 'PaginaVideoController@index')->name('index');
            Route::post('delete', 'PaginaVideoController@removeSelected')->name('deleteSelected');
            Route::post('salvar', 'PaginaVideoController@create')->name('create');
            Route::put('atualizar/{id}', 'PaginaVideoController@update')->name('update');
        });
    });
    Route::group(['prefix' => 'video', 'as' => 'video.'], function(){
        Route::get('', 'VideoController@index')->name('index');
        Route::post('delete', 'VideoController@removeSelected')->name('deleteSelected');
        Route::post('salvar', 'VideoController@create')->name('create');
        Route::put('atualizar/{id}', 'VideoController@update')->name('update');
    });
    Route::group(['prefix' => 'contato', 'as' => 'contato.'], function(){
        Route::get('', 'FaleConoscoController@index')->name('index');
        Route::post('delete', 'FaleConoscoController@removeSelected')->name('deleteSelected');
        Route::post('salvar', 'FaleConoscoController@create')->name('create');
        Route::put('atualizar/{id}', 'FaleConoscoController@update')->name('update');
    });
    Route::group(['prefix' => 'sobre_nos', 'as' => 'sobre_nos.'], function(){
        Route::get('', 'SobreNosController@index')->name('index');
        Route::get('icones', 'SobreNosController@icones')->name('icones');
        Route::post('delete', 'SobreNosController@removeSelected')->name('deleteSelected');
        Route::post('salvar', 'SobreNosController@create')->name('create');
        Route::post('upload', 'SobreNosController@upload')->name('upload');
        Route::put('atualizar/{id}', 'SobreNosController@update')->name('update');
    });
    Route::group(['prefix' => 'config', 'as' => 'config.'], function(){
        Route::get('', 'ConfigController@index')->name('index');
        Route::post('delete', 'ConfigController@removeSelected')->name('deleteSelected');
        Route::post('salvar', 'ConfigController@create')->name('create');
        Route::post('upload', 'ConfigController@upload')->name('upload');
        Route::put('atualizar/{id}', 'ConfigController@update')->name('update');
    });
});