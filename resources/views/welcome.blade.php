<x-layout title="Home">
  <h1>Hello world!</h1>

  {{ $greeting }}, {{ $person }}!

  <p> Today's to-do list:</p>
  @forelse($tasks as $task)
    <li>{{ $task }}</li>
  @empty
    <p>Everything done!</p>
  @endforelse


</x-layout>
