<?php
// routes/web.php

use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PembelianController;

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('kelas')->name('kelas.')->group(function () {
        Route::get('/', [KelasController::class, 'index'])->name('index'); 
        Route::get('create', [KelasController::class, 'create'])->name('create');
        Route::post('/', [KelasController::class, 'store'])->name('store');
        Route::get('{kelas}/edit', [KelasController::class, 'edit'])->name('edit');
        Route::put('{kelas}', [KelasController::class, 'update'])->name('update');
        Route::delete('{kelas}', [KelasController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('{user}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('{user}', [UserController::class, 'update'])->name('update');
        Route::delete('{user}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('pembelian')->name('pembelian.')->group(function () {
        Route::get('/', [PembelianController::class, 'index'])->name('index');
        Route::delete('{pembelian}', [PembelianController::class, 'destroy'])->name('destroy');
    });
});

// Student Routes
Route::prefix('student')->name('student.')->group(function () {
    Route::prefix('kelas')->name('kelas.')->group(function () {
        Route::get('/', [KelasController::class, 'index'])->name('index');
        Route::get('{kelas}', [KelasController::class, 'show'])->name('show');
    });

    Route::post('kelas/{kelas}/pembelian', [PembelianController::class, 'store'])->name('pembelian.store');
});
