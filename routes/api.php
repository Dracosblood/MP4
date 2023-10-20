<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//rutas de docentes
Route::get('/docente', [DocenteController::class, 'index']);
Route::get('/docente/{id}', [DocenteController::class, 'show']);
Route::post('/docente', [DocenteController::class, 'store']);
Route::put('/docente/{id}', [DocenteController::class, 'update']);
Route::delete('/docente{id}', [DocenteController::class, 'destroy']);
//rutas de alumnos
Route::get('/alumno', [AlumnoController::class, 'index']);
Route::get('/alumno/{id}', [AlumnoController::class, 'show']);
Route::post('/alumno', [AlumnoController::class, 'store']);
Route::put('/alumno/{id}', [AlumnoController::class, 'update']);
Route::delete('/alumno/{id}', [AlumnoController::class, 'destroy']);
//rutas de cursos
Route::get('/curso', [CursoController::class, 'index']);
Route::get('/curso/{id}', [CursoController::class, 'show']);
Route::post('/curso', [CursoController::class, 'store']);
Route::put('/curso/{id}', [CursoController::class, 'update']);
Route::delete('/curso/{id}', [CursoController::class, 'destroy']);
//rutas de matriculas
Route::get('/matricula', [MatriculaController::class, 'index']);
Route::get('/matricula/{id}', [MatriculaController::class, 'show']);
Route::post('/matricula', [MatriculaController::class, 'store']);
Route::put('/matricula/{id}', [MatriculaController::class, 'update']);
Route::delete('/matricula/{id}', [MatriculaController::class, 'destroy']);
//rutas de asistencia
Route::get('/asistencia', [AsistenciaController::class, 'index']);
Route::get('/asistencia/{id}', [AsistenciaController::class, 'show']);
Route::post('/asistencia', [AsistenciaController::class, 'store']);
Route::put('/asistencia/{id}', [AsistenciaController::class, 'update']);
Route::delete('/asistencia/{id}', [AsistenciaController::class, 'destroy']);




