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



// Route::get('tipo_noticia', 'TipoNoticiaController@index2json');
// Route::get('tipo_noticia/{id}', 'TipoNoticiaController@show2json');
Route::post('type/create', 'TipoNoticiaController@store');
Route::put('type/update/{id}', 'TipoNoticiaController@update');
Route::delete('type/delete/{id}', 'TipoNoticiaController@destroy');
Route::get('type/me', 'TipoNoticiaController@showMe2json');

