<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('blog')}}">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('posts.index')}}">Listado de posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('posts.create')}}">Nuevo post</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('posts.edit')}}">Editar post</a>
        </li> --}}
      </ul>
    </div>
  </nav>

  {{-- LO QUE ESTA COMENTADO ES PORQUE DABA ERROR AL NO RECIBIR EL PARAMETRO ID --}}
