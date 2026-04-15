<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function (){
    $ideas = session()->get('ideas', []);
    
    return view('ideas', [
        'ideas' => $ideas
    ]);
});

Route::post('/ideas', function (){
    session()->push('ideas', request('idea'));
    return redirect('/');
});

Route::get('/delete-ideas', function() {
    session()->forget('ideas');

    return redirect('/');
});
