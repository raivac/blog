@extends('plantilla')

@section('titulo', 'Listado posts')

@section('contenido')
    <h1>Listado de posts</h1>
    <hr>

    <table style="width: 100%">
        @forelse($posts as $post)
        <tr>
            <td><h2>{{ $post->titulo }}</h2></td>
            <td><h2>({{ $post->user->login}})</h2></td>
            @if(auth()->check())
            <td><a class="btn btn-primary" href="{{ route('posts.show', $post) }}">Ver</a></td>
            <td><a class="btn btn-warning" href="{{ route('posts.edit', $post) }}">Editar</a></td>
            <td>
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Borrar</button>
                    </form>
            </td>
            @endif
        </tr>

        <tr>
            <td colspan="3"><hr></td>
        </tr>

        @empty

        <tr>
            <td>No hay Titulos que mostrar</td>
        </tr>

        @endforelse
    </table>

        {{ $posts->links() }}
@endsection



