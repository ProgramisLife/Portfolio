<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

Route::post('/', [PortfolioController::class, 'store'])->name('portfolio.store');

// Grupa tras dla bloga
Route::prefix('/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/add', [BlogController::class, 'add'])->name('blog.add');
    Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/{post}', [BlogController::class, 'show'])->name('blog.show')->where('post', '[A-Za-z0-9-]+');
    Route::get('/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/{post}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/{post}', [BlogController::class, 'delete'])->name('blog.delete');
});

Route::fallback(function () {
    return redirect('/');
});
