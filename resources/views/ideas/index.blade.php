<x-layout title="Home">

  @if ($ideas->count())
    <div class="mt-6">
      <h2 class="font-bold">Your ideas</h2>
      <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-6">
	@foreach ($ideas as $idea)
	  <x-card  :idea="$idea" href="/ideas/{{ $idea->id }}">
	    {{ $idea->description }}
	  </x-card>
	@endforeach
      </div>
    </div>
  @else
    <p>No ideas yet. <a class="underline" href="/ideas/create">Create a new one</a></p>
  @endif
</x-layout>
