<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('blog');
})->name('blog');

Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');




Route::resource('posts',PostController::class);
// Route::get('posts/nuevaPrueba',[PostController::class,'nuevaPrueba'])->name('nuevaPrueba');
// Route::get('posts/editarPrueba',[PostController::class,'editarPrueba'])->name('editarPrueba');





// Route::get('index',[PostController::class,'index'])->name('index');

// Route::get('post/{id?}',[PostController::class,'show']) ->where('id', "[0-9]+");

// Route::get('crear',[PostController::class,'create'])->name('crear');

// Route::get('ediar',[PostController::class,'edit'])->name('editar');




