<?php

use App\Http\Controllers\BukuController;
use App\Models\Buku;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;

Route::get('/',[BukuController::class,'showhome']);

Route::prefix('/buku')->name('buku.')->group(function(){

    // Route::get('/back', [BukuController::class, 'home'])->name('back');
    Route::get('/create', [BukuController::class, 'create'])->name('create');
    Route::post('/store', [BukuController::class, 'store'])->name('store');
    Route::get('/home', [BukuController::class, 'index'])->name('index');
    Route::get('/{id}', [BukuController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [BukuController::class, 'update'])->name('update');
    Route::delete('/{id}', [BukuController::class, 'destroy'])->name('delete');
});

Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/create', [AkunController::class, 'create'])->name('create');
    Route::get('/', [AkunController::class, 'index'])->name('index');
    Route::get('/{id}', [AkunController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [AkunController::class, 'update'])->name('update');
    Route::delete('/{id}', [AkunController::class, 'destroy'])->name('delete');
    Route::post('/store', [AkunController::class, 'store'])->name('store');
});