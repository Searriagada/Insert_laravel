<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\proyectoController;
use App\Http\Controllers\userController;



Route::get("/", [HomeController::class, 'index']); // Llamar a la clase ubicada en el controlador, debe hacerse por corchetes
// New project
Route ::get('Proyecto/FormInsert', [proyectoController::class,'vistaInsertProyecto']);
Route ::post('Proyecto/FormInsert', [proyectoController::class,'InsertProyecto']);
// New users
Route ::get('User/UserInsert', [userController::class,'vistaInsertUser']);
Route ::post('User/UserInsert', [userController::class,'InsertUser']);

Route :: get('/ListarProyecto',[proyectoController::class,'ListadoProyecto']);
Route :: get('/ListarUser',[userController::class,'ListadoUsuario']);