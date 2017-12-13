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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/editPiatto/{id}', 'PiattoController@editPiatto');

Route::post('/insertPiatto', 'PiattoController@insertPiatto');

Route::get('/listPiatti', 'PiattoController@listPiatti');

Route::get('/formPiatto', 'PiattoController@getForm');

Route::get('/editCategoria/{id}', 'CategoriaController@editCategoria');

Route::post('/insertCategoria', 'CategoriaController@insertCategoria');

Route::get('/listCategorie', 'CategoriaController@listCategorie');

Route::get('/formCategoria', 'CategoriaController@getForm');

Route::get('/editMenu/{id}', 'MenuController@editMenu');

Route::post('/insertMenu', 'MenuController@insertMenu');

Route::get('/listMenu', 'MenuController@listMenu');

Route::get('/formMenu', 'MenuController@getForm');

