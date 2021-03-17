<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\UserController;

Route::get('',[HomeController::class,'index']);


Route::resource('users',\App\Http\Controllers\UserController::class)
    ->only('index','edit','update')//Cuando se desea especificar sólo unos métodos a utilizar y no todos.
    ->names('admin.users');


Route::get('Users/Index',[UserController::class,'index'])->name('indexUsuario');
Route::get('Users/Index/{id}', [UserController::class,'edit'])->name('usuarioEditar');


