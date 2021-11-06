<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AlmacenController;
use App\Http\Controllers\Admin\LogisticaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\ServicioController;
use App\Http\Controllers\Admin\VentaController;
use App\Http\Controllers\Admin\VentaIndexController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\ProveedoresController;
use App\Http\Controllers\Admin\Cliente_productos;
use App\Http\Controllers\Admin\EvaluacionesController;
use App\Http\Controllers\Admin\OrdenesTrabajoController;
use App\Http\Controllers\Admin\OccClientes;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('admin.home');

Route::resource('users', UserController::class)->middleware('can:Ver listado de usuarios')->names('admin.users');

Route::resource('roles', RoleController::class)->middleware('can:Ver listado de roles')->names('admin.roles');

Route::resource('almacen', AlmacenController::class)->names('admin.almacen');

Route::resource('logistica', LogisticaController::class)->names('admin.logistica');

Route::resource('productos', ProductoController::class)->middleware('can:Ver listado de productos')->names('admin.productos');

Route::resource('servicios', ServicioController::class)->names('admin.servicios');

Route::resource('ventas', VentaController::class)->names('admin.ventas');

Route::resource('ventas-index', VentaIndexController::class)->names('admin.ventas-index');

Route::resource('clientes', ClienteController::class)->names('admin.clientes');

Route::resource('proveedores', ProveedoresController::class)->names('admin.proveedores');

Route::resource('productos_cli', Cliente_productos::class)->names('admin.productos_cli');

Route::resource('evaluaciones', EvaluacionesController::class)->names('admin.evaluaciones');

Route::resource('ordenestrabajo', OrdenesTrabajoController::class)->names('admin.ordenestrabajo');

Route::resource('occClientes', OccClientes::class)->names('admin.occClientes');