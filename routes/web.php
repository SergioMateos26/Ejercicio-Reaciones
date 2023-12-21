<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
