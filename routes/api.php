<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecordApiController;
use App\Http\Controllers\Api\GenreController;


// Discos paginados
Route::get(
    '/records/{page}',
    [RecordApiController::class, 'index']
)->name('api.records');

// Detalles de un disco específico
Route::get(
    '/record/{id}',
    [RecordApiController::class, 'show']
)->name('api.record');

// Discos de un género específico con paginación
Route::get(
    '/genre/{id}/{page}',
    [GenreController::class, 'show']
)->name('api.genre');
