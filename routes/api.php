<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\V1\PermisosController as Permisos_V1;

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

Route::group(['middleware' => ['api', 'auth:sanctum'], 'prefix' => 'api'], function() {
    Route::prefix('/usuario')->group(function(){
        Route::get('/', function (Request $request) {
            return $request->user();
        });
        Route::apiResource('/permisos', Permisos_V1::class);
    });

    Route::prefix('/v1')->group(function(){
        //Rutas de la version 1
    });
});
