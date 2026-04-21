<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;


// Index
Route::redirect('/', '/ideas');

// Ideas
Route::middleware('auth')->group(function() {
    Route::get('/ideas', [IdeaController::class, 'index'])->middleware('auth');
    Route::get('/ideas/create', [IdeaController::class, 'create'])->middleware('auth');
    Route::post('/ideas', [IdeaController::class, 'store'])->middleware('auth');
    Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->middleware('auth');
    Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->middleware('auth');
    Route::patch('/ideas/{idea}', [IdeaController::class, 'update'])->middleware('auth');
    Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->middleware('auth');
});



// Login
Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [SessionsController::class, 'create'])->name("login");
    Route::post('/login', [SessionsController::class, 'store']);
    Route::delete('/logout', [SessionsController::class, 'destroy']);
});


Route::get('/admin', function () {
    return 'Very secret secret';
})->can('admin');
