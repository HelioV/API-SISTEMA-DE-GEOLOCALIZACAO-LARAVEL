<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

$router->group(['prefix' => 'api-ndilayetu'], function() use ($router) ///API PRINCIPAL
{

    $router->group(['prefix' => 'pessoa'], function() use ($router)
      {
            $router->get('/', 'App\Http\Controllers\pessoaController@index');

            $router->post('/', 'App\Http\Controllers\pessoaController@store');

            $router->post('/{id}', 'App\Http\Controllers\pessoaController@update');

            $router->get('/{id}', 'App\Http\Controllers\pessoaController@show');

            $router->delete('/destroy/{id}', 'App\Http\Controllers\pessoaController@destroy');

      });

});
