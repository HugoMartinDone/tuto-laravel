<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;


// Index
Route::redirect('/', '/ideas');
Route::get('/ideas', function (){ 
    $ideas = Idea::query()
        ->when(request('state'), function($query, $state){
            $query->where('state', $state);
        })->get();

    return view('ideas.index', [
        'ideas' => $ideas
    ]);
});

// Show
Route::get('/ideas/{idea}', function (Idea $idea){ 
    return view('ideas.show', [
        'idea' => $idea
    ]);
});

// Edit
Route::get('/ideas/{idea}/edit', function (Idea $idea){ 
    return view('ideas.edit', [
        'idea' => $idea
    ]);
});



// store
Route::post('/ideas', function (){
    Idea::create([
        'description' => request('description'),
        'state' => 'pending'
    ]);
    return redirect('/ideas');
});

// edit
Route::patch('/ideas/{idea}', function(Idea $idea) {
    $idea->update([
        'description' => request('description')
    ]);
    return redirect("/ideas/{$idea->id}");
});

//destroy
Route::delete('/ideas/{idea}', function(Idea $idea) {
    $idea->delete();
    return redirect('/ideas');
});
