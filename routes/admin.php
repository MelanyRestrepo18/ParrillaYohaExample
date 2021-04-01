<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\UserController;





Route::get('',[HomeController::class,'index']);



Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');


