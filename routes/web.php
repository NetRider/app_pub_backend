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

Route::post('/insertPiatto', 'PiattoController@insertPiatto');

Route::get('/formPiatto', 'PiattoController@getForm');

Route::post('/insertCategoria', 'CategoriaController@insertCategoria');

Route::get('/listCategorie', 'CategoriaController@listCategorie');

Route::get('/formCategoria', 'CategoriaController@getForm');

Route::get('/editMenu', 'MenuController@editMenu');

Route::post('/insertMenu', 'MenuController@insertMenu');

Route::get('/formMenu', 'MenuController@getForm');

