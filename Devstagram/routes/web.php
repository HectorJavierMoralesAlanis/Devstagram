<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

//Ruta para pagina principal
Route::get('/', function () {
    return view('principal');
});

//Crear ruta para alumnos
Route::view('/alumnos','alumnos');

Route::view('/curriculum','curriculum');

//Ruta para registro de usuario
Route::get('/register',[RegisterController::class,'index'])->name("register");
//Ruta para enviar datos al servidor
Route::post('/register',[RegisterController::class,'store']);

//Ruta para vista del muro de perfil de usuario autentucado
Route::get('/muro',[PostController::class,'index'])->name('post.index');

//Ruta para el login
Route::get('/login',[LoginController::class,'index'])->name('login');

//Ruta para la validacion del login
Route::post('/login',[LoginController::class, 'store']);

//Ruta para logout
Route::get('/logout',[LogoutController::class,'store'])->name('logout');