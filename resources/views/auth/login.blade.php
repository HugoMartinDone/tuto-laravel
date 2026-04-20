<x-layout>


  <form method="POST" action="/login">
    @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
      <legend class="fieldset-legend">Log In</legend>

      <label class="label">Email</label>
      <input type="email" name="email" class="input" placeholder="Your email" required/>

      <label class="label">Password</label>
      <input type="password" name="password" class="input" placeholder="Password" required/>
      @error('password')
        <x-forms.error field='password'/>
      @enderror

      @error('email')
        <x-forms.error field='email'/>
      @enderror

      <button class="btn btn-neutral mt-4">Log In</button>
    </fieldset>

  </form>

</x-layout>
