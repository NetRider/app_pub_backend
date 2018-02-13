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


Route::get('weatherData/getLast', function () {
    return '
	{"error":0,"weatherHistory":{"id":5,"time":"2018-02-13 22:00:00.0","temp_out":20.5,"hum_out":30,"temp_in":20.0,"hum_in":30,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.14}}
	';
});


Route::get('cameraDensity/getLast', function () {
	return '
	{"cameraHistory":[{"id":3,"camera_name":"Botticelli 1","timestamp":"2018-02-13 18:56:00.0","density":77},{"id":4,"camera_name":"Botticelli 2","timestamp":"2018-02-13 18:56:00.0","density":33}],"error":0}
	';
});


Route::get('cameraDensity/getLastWeek', function () {
	return '
	{"cameraHistory":[{"id":1,"camera_name":"Botticelli 1","timestamp":"2018-0213 12:33:25.0","density":2},{"id":2,"camera_name":"Botticelli 2","timestamp":"2018-0213 08:00:00.0","density":33}, {"id":3,"camera_name":"Botticelli 1","timestamp":"2018-0213 08:30:00.0","density":4},{"id":4,"camera_name":"Botticelli 2","timestamp":"2018-0213 08:30:00.0","density":30}, {"id":5,"camera_name":"Botticelli 1","timestamp":"2018-0213 09:00:00.0","density":6},{"id":6,"camera_name":"Botticelli 2","timestamp":"2018-0213 09:30:00.0","density":31},{"id":7,"camera_name":"Botticelli 1","timestamp":"2018-0213 09:30:00.0","density":8}, {"id":8,"camera_name":"Botticelli 2","timestamp":"2018-0213 09:30:00.0","density":32},{"id":9,"camera_name":"Botticelli 1","timestamp":"2018-0213 10:00:00.0","density":14}, {"id":10,"camera_name":"Botticelli 2","timestamp":"2018-0213 10:00:00.0","density":34},{"id":11,"camera_name":"Botticelli 1","timestamp":"2018-0213 10:30:00.0","density":16}, {"id":12,"camera_name":"Botticelli 2","timestamp":"2018-0213 10:30:00.0","density":36},{"id":13,"camera_name":"Botticelli 1","timestamp":"2018-0213 11:00:00.0","density":22}, {"id":14,"camera_name":"Botticelli 2","timestamp":"2018-0213 11:00:00.0","density":32},{"id":15,"camera_name":"Botticelli 1","timestamp":"2018-0213 11:30:00.0","density":20}, {"id":16,"camera_name":"Botticelli 2","timestamp":"2018-0213 11:30:00.0","density":28},{"id":17,"camera_name":"Botticelli 1","timestamp":"2018-0213 12:00:00.0","density":18}, {"id":18,"camera_name":"Botticelli 2","timestamp":"2018-0213 12:00:00.0","density":24},{"id":19,"camera_name":"Botticelli 1","timestamp":"2018-0213 12:30:00.0","density":17}, {"id":20,"camera_name":"Botticelli 2","timestamp":"2018-0213 12:30:00.0","density":26},{"id":21,"camera_name":"Botticelli 1","timestamp":"2018-0213 13:00:00.0","density":16},{"id":22,"camera_name":"Botticelli 2","timestamp":"2018-0213 13:00:00.0","density":22},{"id":23,"camera_name":"Botticelli 1","timestamp":"2018-0213 13:30:00.0","density":40}, {"id":24,"camera_name":"Botticelli 2","timestamp":"2018-0213 13:30:00.0","density":70}],"error":0}
	';
});


Route::get('weatherData/getLastWeek', function () {
	return '
		{"error":0,"weatherHistory":[{"id":1,"time":"2018-02-13 22:00:00.0","temp_out":20.5,"hum_out":30,"temp_in":18.0,"hum_in":30,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.14},{"id":2,"time":"2018-02-31 22:30:00.0","temp_out":21.5,"hum_out":33,"temp_in":16.0,"hum_in":50,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.12},{"id":3,"time":"2018-02-13 23:00:00.0","temp_out":20.5,"hum_out":30,"temp_in":18.0,"hum_in":30,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.14},{"id":4,"time":"2018-02-12 23:30:00.0","temp_out":21.5,"hum_out":33,"temp_in":16.0,"hum_in":50,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.12},{"id":5,"time":"2018-02-12 22:00:00.0","temp_out":20.5,"hum_out":30,"temp_in":20.0,"hum_in":30,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.14},{"id":6,"time":"2018-02-11 23:30:00.0","temp_out":21.5,"hum_out":33,"temp_in":16.0,"hum_in":50,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.12},{"id":8,"time":"2018-02-10 20:00:00.0","temp_out":21.5,"hum_out":33,"temp_in":16.0,"hum_in":50,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.12},{"id":9,"time":"2018-02-08 20:00:00.0","temp_out":21.5,"hum_out":33,"temp_in":16.0,"hum_in":50,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.12},{"id":10,"time":"2018-02-07 20:00:00.0","temp_out":21.5,"hum_out":33,"temp_in":16.0,"hum_in":50,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.12},{"id":11,"time":"2018-02-06 15:15:00.0","temp_out":21.5,"hum_out":33,"temp_in":16.0,"hum_in":50,"wind_speed":0.3,"wind_dir":"NE","rain":0.13,"rain_rate":0.12}]}
	';
});


Route::get('avg/chart/internalWithTime', function () {
	return '
	{"journeyTime":{"2018-02-13":{"2018-02-13 14:00:00":"84","2018-02-13 16:15:00":"166","2018-02-13 13:30:00":"118","2018-02-13 15:45:00":"140","2018-02-13 11:30:00":"108","2018-02-13 13:45:00":"113","2018-02-13 10:45:00":"95","2018-02-13 11:15:00":"100","2018-02-13 17:00:00":"103","2018-02-13 09:45:00":"69","2018-02-13 10:00:00":"76","2018-02-13 11:45:00":"112","2018-02-13 12:00:00":"120","2018-02-13 17:30:00":"79","2018-02-13 14:15:00":"115","2018-02-13 15:00:00":"111","2018-02-13 16:45:00":"126","2018-02-13 10:15:00":"85","2018-02-13 12:30:00":"122","2018-02-13 17:15:00":"70","2018-02-13 12:15:00":"113","2018-02-13 15:15:00":"117","2018-02-13 14:45:00":"113","2018-02-13 13:00:00":"113","2018-02-13 13:15:00":"113","2018-02-13 11:00:00":"105","2018-02-13 12:45:00":"120","2018-02-13 16:30:00":"172","2018-02-13 15:30:00":"133","2018-02-13 17:45:00":"68","2018-02-13 16:00:00":"157","2018-02-13 10:30:00":"92"},"2018-02-12":{"2018-02-12 10:00:00":"80","2018-02-12 10:45:00":"97","2018-02-12 11:00:00":"99","2018-02-12 10:30:00":"72","2018-02-12 09:45:00":"58","2018-02-12 10:15:00":"63"}},"error":0}
	';
});


Route::get('avg/now/internal', function () {
	return '111.5508';
});


Route::get('avg/chart/externalWithTime', function () {
	return '
	{"error":0,"waitTime":{"2018-02-13":{"2018-02-13 14:00:00":"36","2018-02-13 16:15:00":"29","2018-02-13 13:30:00":"35","2018-02-13 15:45:00":"30","2018-02-13 11:30:00":"48","2018-02-13 13:45:00":"23","2018-02-13 10:45:00":"52","2018-02-13 11:15:00":"49","2018-02-13 17:00:00":"20","2018-02-13 08:45:00":"26","2018-02-13 09:45:00":"46","2018-02-13 10:00:00":"44","2018-02-13 11:45:00":"52","2018-02-13 12:00:00":"45","2018-02-13 09:15:00":"36","2018-02-13 14:30:00":"67","2018-02-13 17:30:00":"7","2018-02-13 14:15:00":"48","2018-02-13 15:00:00":"26","2018-02-13 16:45:00":"24","2018-02-13 09:30:00":"40","2018-02-13 10:15:00":"45","2018-02-13 12:30:00":"33","2018-02-13 17:15:00":"14","2018-02-13 12:15:00":"47","2018-02-13 15:15:00":"23","2018-02-13 18:00:00":"168","2018-02-13 14:45:00":"19","2018-02-13 13:00:00":"30","2018-02-13 13:15:00":"28","2018-02-13 11:00:00":"52","2018-02-13 12:45:00":"27","2018-02-13 16:30:00":"28","2018-02-13 15:30:00":"25","2018-02-13 16:00:00":"27","2018-02-13 10:30:00":"49","2018-02-13 09:00:00":"32"},"2018-02-12":{"2018-02-12 15:15:00":"1660","2018-02-12 15:30:00":"1708","2018-02-12 16:45:00":"1750","2018-02-12 11:15:00":"73","2018-02-12 11:00:00":"69","2018-02-12 11:30:00":"778","2018-02-12 10:30:00":"64","2018-02-12 09:45:00":"62","2018-02-12 12:00:00":"1461","2018-02-12 15:45:00":"1734"}}}
	';
});

Route::get('avg/now/internal', function () {
	return '46.3049';
});
