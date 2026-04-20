<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;


// Index
Route::redirect('/', '/ideas');

// Ideas
Route::get('/ideas', [IdeaController::class, 'index']);
Route::get('/ideas/create', [IdeaController::class, 'create']);
Route::post('/ideas', [IdeaController::class, 'store']);
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);


// Login
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::delete('/logout', [SessionsController::class, 'destroy']);
