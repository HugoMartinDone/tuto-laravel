@props([
       'field' => 'required',
])

@error($field)
  <p class="text-xs text-error mt-1">{{ $message }}</p>
@enderror
