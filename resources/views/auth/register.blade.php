<x-layout>
  <div class="min-h-screen min-w-screen flex items-center justify-center">
    <form action="/register" method="post" class="w-full max-w-md space-y-4 bg-gray-100 rounded-xl p-6"
      enctype="multipart/form-data">
      @csrf
      <x-form.input name='name' />
      <x-form.input name='username' />
      <x-form.input name='email' type='email' />
      <x-form.input name='avatar' type='file' class="file:border-0 file:text-blue-700 file:bg-blue-100 file:px-3 file:py-1.5 file:rounded-md"/>
      <x-form.input name='password' type='password' />
      <x-form.input name='password_confirmation' type='password' />
      <div class="flex justify-between items-center">
        <x-form.submit value='Register' />
        <a href="/login" class="text-sm text-blue-500 hover:underline">Already have account login</a>
      </div>
    </form>
  </div>
</x-layout>