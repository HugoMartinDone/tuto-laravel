<x-layout>


  <form method="POST" action="/register">
    @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
      <legend class="fieldset-legend">Register</legend>

      <label class="label">Name</label>
      <input type="name" name="name" class="input" placeholder="Your name" required/>
      <x-forms.error field='name'/>

      <label class="label">Email</label>
      <input type="email" name="email" class="input" placeholder="Your email" required/>
      <x-forms.error field='email'/>

      <label class="label">Password</label>
      <input type="password" name="password" class="input" placeholder="Password" required/>
      <x-forms.error field='password'/>

      <button class="btn btn-neutral mt-4" data-test="register-button">Register</button>
    </fieldset>

  </form>

</x-layout>
