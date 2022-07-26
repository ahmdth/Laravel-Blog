<x-layout>
  <div class="min-h-screen min-w-screen flex items-center justify-center">
    <form action="/login" method="post" class="w-full max-w-md space-y-6 bg-gray-100 rounded-xl p-6">
      @csrf
      @error('fails')
      <p class="bg-red-100 px-6 py-3 rounded-xl text-red-500 text-sm">{{ $message }}</p>
      @enderror
      <x-form.input type='email' name='email' />
      <x-form.input type='password' name='password' />
      <div class="flex justify-between items-center">
        <x-form.submit value='Login' />
        <a href="/register" class="text-sm text-blue-500 hover:underline">Create account</a>
      </div>
    </form>
  </div>
</x-layout>