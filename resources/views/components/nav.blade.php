<div class="navbar bg-base-200">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg aria-label="Menu" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
      </div>
      <ul
        tabindex="-1"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li><a>Home</a></li>
        <li><a>New Idea</a></li>
      </ul>
    </div>
    <a href="/ideas" class="btn btn-ghost text-xl">Ideas</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href = "/ideas">Home</a></li>
      <li><a href = "/ideas/create">New Idea</a></li>
    </ul>
  </div>
  <div class="navbar-end space-x-2">
    @guest
    <a href = "/register" class="btn btn-neutral">Register</a>
    <a href = "/login" class="btn btn-soft">Login</a>

    @endguest

    @auth
      <form method="POST" action="/logout">
        @csrf
        @method('DELETE')

        <button class="btn btn-neutral">Log Out</button>
    @endauth
  </form>
  </div>
</div>