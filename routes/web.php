<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome', [
    'greeting' => 'Hello',
    'person' => request('person', 'John'),
    'tasks' => [
        'Go to the market',
        'Walk the dog',
        'Watch a video tutorial'
    ]
]);

Route::view('/about', 'about');
Route::view('/contact', 'contact');
