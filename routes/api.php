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

Route::get('/getCategorie', 'CategoriaController@getCategorie');

Route::get('/getPiatti', 'PiattoController@getPiatti');

Route::get('/getPiattiByCategoria/{cat_id}', 'PiattoController@getPiattiByCategoria');

Route::get('/getPiattoById/{piatto_id}', 'PiattoController@getPiattoById');

Route::get('/getMenu', 'MenuController@getMenu');

Route::get('getMenuVersion', 'MenuController@getMenuVersion');

Route::get('getEventoById/{id}', 'EventoController@getEventoById');

Route::get('getEventi', 'EventoController@getEventi');

Route::get('getSchedarioVersion', 'SchedarioController@getSchedarioVersion');

Route::post('sortPiatti', 'PiattoController@sortPiatti');

Route::post('sortCategorie', 'CategoriaController@sortCategorie');
