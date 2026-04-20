<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::query()->where(['user_id' => Auth::id()])->get();

        return view('ideas.index', [
            'ideas' => $ideas
        ]);
    }

    public function create()
    {
        return view('ideas.create');
    }

    public function store(IdeaRequest $request)
    {
        Idea::create([
            'description' => request('description'),
            'state' => 'pending',
            'user_id' => Auth::id(),
        ]);
        return redirect('/ideas');
    }

    public function show(Idea $idea)
    {
        return view('ideas.show', [
            'idea' => $idea
        ]);
    }

    public function edit(Idea $idea)
    {
        return view('ideas.edit', [
            'idea' => $idea
        ]);
    }

    public function update(IdeaRequest $request, Idea $idea)
    {
        $idea->update([
            'description' => request('description')
        ]);
        return redirect("/ideas/{$idea->id}");
    }

    public function destroy(Idea $idea)
    {
        $idea->delete();
        return redirect('/ideas');

    }
}
