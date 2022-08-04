<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessController;

Route::delete('/processes/{id}', [ProcessController::class, 'destroy'])->name('processes.destroy');
Route::put('/processes/{id}', [ProcessController::class, 'update'])->name('processes.update');
Route::get('/processes/{id}/edit', [ProcessController::class, 'edit'])->name('processes.edit');
Route::get('/processes/create', [ProcessController::class, 'create'])->name('processes.create');
Route::post('/process', [ProcessController::class, 'store'])->name('processes.store');
Route::get('/processes', [ProcessController::class, 'index'])->name('processes.index');
Route::get('/processes/{id}', [ProcessController::class, 'show'])->name('processes.show');
