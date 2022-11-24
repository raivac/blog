<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('blog')}}">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('posts.index')}}">Listado de posts</a>
        </li>

        @if(auth()->check())
        <li class="nav-item">
            <a class="nav-link" href="{{route('posts.create')}}">Nuevo post</a>
        </li>
        @endif
     </ul>
    </div>

{{----------------------------------LOGIN--------------------------------}}

    <div class="navbar-collapse collapse w-1000 order-3 dual-collapse2">
        <ul class="navbar-nav">

        @if(!auth()->check())
        <li class="nav-item">
            <a class="navbar-brand" style="border: 2px solid white ; border-radius: 5px; padding:5px 10px" href="{{ route('login') }}">Login</a>
        </li>
        @endif

        @if(auth()->check())
        <li class="nav-item">
            <a class="navbar-brand" style="border: 2px solid white ; border-radius: 5px; padding:5px 10px"  href="{{ route('logout') }}">Logout</a>
        </li>
        @endif
        </ul>
    </div>




  </nav>

