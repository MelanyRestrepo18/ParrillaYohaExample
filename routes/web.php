<?php

use App\Http\Controllers\InsumosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
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
    return view('auth.login');
});


Route::get('empleados/Listar', [EmpleadoController::class, 'Listar'])->name('empleadoIndex');
Route::delete('empleados/{empleado}',[EmpleadoController::class, 'eliminar'])->name('empleadoEliminar');
Route::post('empleados/crear',[EmpleadoController::class,'crear'])->name('empleadocrear');
Route::get('empleados/formulario', [EmpleadoController::class, 'formulario'])->name('empleadoFormulario');
Route::get('empleados/formularioEditar/{id}', [EmpleadoController::class, 'formularioEditar'])->name('empleadoEditar');
Route::put('empleados/{empleado}',[EmpleadoController::class,'actualizar'])->name('empleadoActualizar');



Route::get('ventas/crear',[VentasController::class,'ventaCrearVista'])->name('vistaCrearVenta');


Route::get('ventas/Listar',[VentasController::class,'Index'])->name('vistaVenta');


Route::get('insumos/Listar',[InsumosController::class,'Listar'])->name('listarInsumo');


