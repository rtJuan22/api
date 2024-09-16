<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Obtener todos los usuarios
Route::get('users', [UserController::class, 'index']);

// Crear un nuevo usuario
Route::post('users', [UserController::class, 'store']);

// Obtener un usuario por ID
Route::get('users/{id}', [UserController::class, 'show']);

// Actualizar un usuario por ID
Route::put('users/{id}', [UserController::class, 'update']);

// Eliminar un usuario por ID
Route::delete('users/{id}', [UserController::class, 'destroy']);

// Rutas de productos

// Obtener todos los usuarios
Route::get('products', [ProductController::class, 'index']);

// Crear un nuevo usuario
Route::post('products', [ProductController::class, 'store']);

// Obtener un usuario por ID
Route::get('products/{id}', [ProductController::class, 'show']);

// Actualizar un usuario por ID
Route::put('products/{id}', [ProductController::class, 'update']);

// Eliminar un usuario por ID
Route::delete('products/{id}', [ProductController::class, 'destroy']);

// Ruta de orden 

// Obtener todos los usuarios
Route::get('orders', [OrderController::class, 'index']);

// Crear un nuevo usuario
Route::post('orders', [OrderController::class, 'store']);

// Obtener un usuario por ID
Route::get('orders/{id}', [OrderController::class, 'show']);

// Actualizar un usuario por ID
Route::put('orders/{id}', [OrderController::class, 'update']);

// Eliminar un usuario por ID
Route::delete('orders/{id}', [OrderController::class, 'destroy']);


