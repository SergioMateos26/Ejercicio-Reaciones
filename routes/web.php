<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\AsignarController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TemaController;

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


Route::get('/usuario/lista/post', [PostController::class, 'lista']);
Route::post('/usuario/crear/post', [PostController::class, 'crear']);
Route::delete('/post/eliminar/{id}', [PostController::class, 'eliminar']);
Route::get('/post/botonEditar/{id}', [PostController::class, 'botonEditar']); 
Route::put('/post/editar/{id}', [PostController::class, 'editar']); 


Route::get('/tema', [TemaController::class, 'lista']);
Route::post('/tema/crear', [TemaController::class, 'crear']);
Route::delete('/tema/eliminar/{id}', [TemaController::class, 'eliminar']);
Route::get('/tema/botonEditar/{id}', [TemaController::class, 'botonEditar']); 
Route::put('/tema/editar/{id}', [TemaController::class, 'editar']); 