<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AlmacenController;
use App\Http\Controllers\Admin\LogisticaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\ServicioController;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('admin.home');

Route::resource('users', UserController::class)->middleware('can:Ver listado de usuarios')->names('admin.users');

Route::resource('roles', RoleController::class)->middleware('can:Ver listado de roles')->names('admin.roles');

Route::resource('almacen', AlmacenController::class)->names('admin.almacen');

Route::resource('logistica', LogisticaController::class)->names('admin.logistica');

Route::resource('productos', ProductoController::class)->middleware('can:Ver listado de productos')->names('admin.productos');

Route::resource('servicios', ServicioController::class)->names('admin.servicios');

