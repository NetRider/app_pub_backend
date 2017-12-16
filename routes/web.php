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
    return view('home');
});

Route::get('/editPiatto/{id}', 'PiattoController@editPiatto');

Route::post('/insertPiatto', 'PiattoController@insertPiatto');

Route::get('/listPiatti', 'PiattoController@listPiatti');

Route::get('/formPiatto', 'PiattoController@getForm');

Route::post('/updatePiatto', 'PiattoController@updatePiatto');

Route::get('/destroyPiatto/{id}', 'PiattoController@destroyPiatto');

Route::get('/editCategoria/{id}', 'CategoriaController@editCategoria');

Route::post('/insertCategoria', 'CategoriaController@insertCategoria');

Route::get('/listCategorie', 'CategoriaController@listCategorie');

Route::get('/formCategoria', 'CategoriaController@getForm');

Route::post('/updateCategoria', 'CategoriaController@updateCategoria');

Route::get('/destroyCategoria/{id}', 'CategoriaController@destroyCategoria');

Route::get('/editMenu/{id}', 'MenuController@editMenu');

Route::post('/insertMenu', 'MenuController@insertMenu');

Route::get('/listMenu', 'MenuController@listMenu');

Route::get('/formMenu', 'MenuController@getForm');

Route::post('/updateMenu', 'MenuController@updateMenu');

Route::get('/destroyMenu/{id}', 'MenuController@destroyMenu');

Route::get('/editEvento/{id}', 'EventoController@editEvento');

Route::post('/insertEvento', 'EventoController@insertEvento');

Route::get('/listEventi', 'EventoController@listEventi');

Route::get('/formEvento', 'EventoController@getForm');

Route::post('/updateEvento', 'EventoController@updateEvento');

Route::get('/destroyEvento/{id}', 'EventoController@destroyEvento');

//Grazie Heroku per i link simbolici
Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/public/' . $filename);

    if (!File::exists($path)) {
		abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
