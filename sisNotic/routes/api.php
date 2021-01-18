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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('usuario')->group(function(){
    Route::post('register', 'AutenticadorController@registrar');
    Route::post('login', 'AutenticadorController@login');

    Route::middleware('auth:api')->group(function(){
        Route::post('deslog', 'AutenticadorController@logout');
        Route::post('me', 'AutenticadorController@showme');
    });
// });


Route::prefix('type')->group(function(){
    Route::middleware('auth:api')->group(function(){
        Route::post('create', 'TipoNoticiaController@store');
        Route::post('update/{id}', 'TipoNoticiaController@update');
        Route::post('delete/{id}', 'TipoNoticiaController@destroy');
        Route::get('me', 'TipoNoticiaController@showMe2json');
    });
});

Route::prefix('news')->group(function(){
    Route::middleware('auth:api')->group(function(){
        Route::post('create', 'NoticiaController@store');
        Route::post('update/{id}', 'NoticiaController@update');
        Route::post('delete/{id}', 'NoticiaController@destroy');
        Route::get('me', 'NoticiaController@showMe2json');
        Route::get('type/{id}', 'NoticiaController@showty2json');
    });
});
// Route::get('news', 'NoticiaController@index2json');
// Route::get('news/{id}', 'NoticiaController@show2json');

// Route::get('usuario', 'UserController@index2json');
// Route::get('usuario/{id}', 'UserController@show2json');
// Route::post('usuari/create', 'UserController@store');
// Route::put('usuari/update/{id}', 'UserController@update');
// Route::delete('usuari/delete/{id}', 'UserController@destroy');
// Route::get('usuari/me', 'UserController@showMe2json');

