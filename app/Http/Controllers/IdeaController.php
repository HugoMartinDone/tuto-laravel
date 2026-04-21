<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Models\Idea;
use App\Notifications\IdeaPublished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class IdeaController extends Controller
{
    public function index()
    {
        return view('ideas.index', [
            'ideas' => Auth::user()->ideas
        ]);
    }

    public function create()
    {
        Gate::authorize('create', Idea::class);
        return view('ideas.create');
    }

    public function store(IdeaRequest $request)
    {
        Gate::authorize('create', Idea::class);
        $idea = Auth::user()->ideas()->create([
            'description' => request('description'),
            'state' => 'pending',
        ]);

        Auth::user()
            ->notify(new IdeaPublished($idea));

        return redirect('/ideas');
    }

    public function show(Idea $idea)
    {
        Gate::authorize('view', $idea);
        return view('ideas.show', [
            'idea' => $idea
        ]);
    }

    public function edit(Idea $idea)
    {
        Gate::authorize('view', $idea);
        return view('ideas.edit', [
            'idea' => $idea
        ]);
    }

    public function update(IdeaRequest $request, Idea $idea)
    {
        Gate::authorize('view', $idea);
        $idea->update([
            'description' => request('description')
        ]);
        return redirect("/ideas/{$idea->id}");
    }

    public function destroy(Idea $idea)
    {
        Gate::authorize('view', $idea);
        $idea->delete();
        return redirect('/ideas');

    }
}
