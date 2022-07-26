<nav class="md:flex md:justify-between md:items-center">
  <div>
    <a href="/">
      <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
    </a>
  </div>
  <div class="mt-8 md:mt-0 flex items-center">
    @guest
    <a href="/login" class="text-sm mr-4">Login</a>
    <a href="/register" class="text-sm">Register</a>
    @else
    <form action="/logout" method="post">
      @csrf
      <input type="submit" value="Logout" class="cursor-pointer text-sm" />
    </form>
    @endguest
    <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
      Subscribe for Updates
    </a>
  </div>
</nav>