<x-layout title="Home">

  @if ($ideas->count())
    <div class="mt-6">
      <h2 class="font-bold">Your ideas</h2>
      <ul>
	@foreach ($ideas as $idea)
	  <a href="/ideas/{{ $idea->id }}">
	    <li class="text-sm">{{ $idea->description }}</li>
	  </a>
	@endforeach
      </ul>
    </div>
  @else
    <p>No ideas yet. <a class="underline" href="/ideas/create">Create a new one</a></p>
  @endif
</x-layout>
