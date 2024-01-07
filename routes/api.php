<?php

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
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

Route::get('/posts/{user_id}', function($user_id){
    $posts = Post::where('usuario_id', '=', $user_id)
    ->orderBy('titulo', 'ASC')
    ->get();
    return $posts;
});

Route::get('/postsRecent', function(){
    $posts = DB::table('posts')
        ->orderBy('created_at', 'DESC')
        ->limit(12)
        ->get();
    return $posts;
});


