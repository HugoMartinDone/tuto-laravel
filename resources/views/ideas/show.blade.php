<x-layout title="Home">

  <div class="card bg-neutral p-6 ">
    <div>
      <p class="text-sm">{{ $idea->description }}</p>
    </div>

    <div class="mt-6">
      <a href='/ideas/{{ $idea->id }}/edit'>
	<button class="btn">Edit</button>
      </a>
    </div>
  </div>
</x-layout>
