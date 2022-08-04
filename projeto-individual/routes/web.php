<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [ProcessController::class, 'index'])->name('process.index');
