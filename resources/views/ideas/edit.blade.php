<x-layout title="Home">

  <form method="POST" action="/ideas/{{ $idea->id }}">
    @method('PATCH')
    @csrf

    <div class="col-span-full">
      <label for="description" class="block text-sm/6 font-medium">Edit your idea</label>
      <div class="mt-2">
        <textarea
	    id="description"
	    name="description"
	    rows="3"
	    class="textarea w-full @error('description') textarea-error @enderror">
	  {{ $idea->description }}
	</textarea>

	<x-forms.error field="description"/>
      </div>
    </div>


    <div class="mt-6 flex items-center gap-x-2">
      <button type="submit" class="btn btn-primary">Update</button>
      <button form="delete-idea-form" class="btn btn-warning">Delete</button>
    </div>

  </form>

  <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
    @method('DELETE')
    @csrf
  </form>

</x-layout>
