<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\AsignarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [UserController::class, 'lista']); 
Route::post('/usuario/crear', [UserController::class, 'crear']); 
Route::delete('/usuario/eliminar/{id}', [UserController::class, 'eliminar']);
Route::get('/usuario/botonEditar/{id}', [UserController::class, 'botonEditar']); 
Route::put('/usuario/editar/{id}', [UserController::class, 'editar']); 


Route::get('/direccion', [DireccionController::class, 'lista']);
Route::post('/direccion/crear', [DireccionController::class, 'crear']);
Route::delete('/direccion/eliminar/{id}', [DireccionController::class, 'eliminar']);
Route::get('/direccion/botonEditar/{id}', [DireccionController::class, 'botonEditar']); 
Route::put('/direccion/editar/{id}', [DireccionController::class, 'editar']); 


Route::get('/lista/asignar' , [AsignarController::class, 'lista']);
Route::post('/asignar' , [AsignarController::class, 'asignar']);