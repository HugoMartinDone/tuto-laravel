<x-layout title="Home">
  
  <div class="mt-6 text-white">
    <h2 class="font-bold">Your idea</h2>
    <div class="mt-6">
      <p class="text-sm">{{ $idea->description }}</p>
    </div>
  </div>

<div class="mt-6 flex items-center gap-x-6">
  <a href='/ideas/{{ $idea->id }}/edit'>
    <button class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</button>
  </a>
</div>
</x-layout>
