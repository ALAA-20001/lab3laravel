<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Users
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item {{ request()->is('users') ? 'active' : '' }}" href="{{ route('users.index') }}">Users List</a></li>
            <li><a class="dropdown-item {{ request()->is('users/create') ? 'active' : '' }}" href="{{ route('users.create') }}">New User</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Posts
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item {{ request()->is('posts') ? 'active' : '' }}" href="{{ route('posts.index') }}">Posts List</a></li>
              <li><a class="dropdown-item {{ request()->is('posts/create') ? 'active' : '' }}" href="{{ route('posts.create') }}">New Post</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>

