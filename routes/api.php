<?php
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\ExtintorController;
use App\Http\Controllers\InspeccionController;
use App\Http\Controllers\RecargaController;

Route::apiResource('ubicaciones', UbicacionController::class);
Route::apiResource('proveedores', ProveedorController::class);
Route::apiResource('tipos', TipoController::class);
Route::apiResource('extintores', ExtintorController::class);
Route::apiResource('inspecciones', InspeccionController::class);
Route::apiResource('recargas', RecargaController::class);
