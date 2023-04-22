<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\estudiantes\EstudianteController;
use \App\Http\Controllers\estudiantes\CrearEstudianteController;

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

Route::get('/estudiantes',  [EstudianteController::class, 'todosEstudiantes']);
Route::post('/crear/estudiantes', [CrearEstudianteController::class, 'crearEstudiante']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


