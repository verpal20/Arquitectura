<?php

use App\Http\Controllers\AvanceController;
use App\Http\Controllers\EmpresaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\UserController;
use App\Models\Estudiante;




//use App\Http\Controllers\Api\RegisterController;

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
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
Route::post('logout',[UserController::class,'logout']);

Route::group(['middleware' => ["auth:sanctum"]],function(){
    //rutas
    Route::get('userprofile',[UserController::class,'userProfile']);

});


//RUTAS - APIS

//PROYECTO
Route::get('/proyectos',[ProyectoController::class,'index']);//muestra todos los registros
Route::post('/proyectos',[ProyectoController::class,'store']);//crear un registro
Route::put('/proyectos/{id}', [ProyectoController::class,'update']);
Route::delete('/proyectos/{id}', [ProyectoController::class,'destroy']);

//EMPRESA
Route::get('/empresas',[EmpresaController::class,'index']);//muestra todos los registros
Route::post('/empresas',[EmpresaController::class,'store']);//crear un registro
Route::put('/empresas/{id}', [EmpresaController::class,'update']);
Route::delete('/empresas/{id}', [EmpresaController::class,'destroy']);

//AVANCES
Route::get('/avances',[AvanceController::class,'index']);//muestra todos los registros
Route::post('/avances',[AvanceController::class,'store']);//crear un registro
Route::put('/avances/{id}', [AvanceController::class,'update']);
Route::delete('/avances/{id}', [AvanceController::class,'destroy']);

//RECURSOS
Route::get('/recursos',[RecursoController::class,'index']);//muestra todos los registros
Route::post('/recursos',[RecursoController::class,'store']);//crear un registro
Route::put('/recursos/{id}', [RecursoController::class,'update']);
Route::delete('/recursos/{id}', [RecursoController::class,'destroy']);

//MATERIAS
Route::get('/materias',[MateriaController::class,'index']);//muestra todos los registros
Route::post('/materias',[MateriaController::class,'store']);//crear un registro
Route::put('/materias/{id}', [MateriaController::class,'update']);
Route::delete('/materias/{id}', [MateriaController::class,'destroy']);

//ESTUDIANTES
Route::get('/estudiantes',[EstudianteController::class,'index']);//muestra todos los registros
Route::post('/estudiantes',[EstudianteController::class,'store']);//crear un registro
Route::put('/estudiantes/{id}', [EstudianteController::class,'update']);
Route::delete('/estudiantes/{id}', [EstudianteController::class,'destroy']); //elimina un registro
