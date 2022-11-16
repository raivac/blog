@extends('plantilla')

@section('titulo', 'Listado posts')

@section('contenido')
    <h1>Listado de posts</h1>
    <hr>

    <table style="width: 100%">
        @forelse($posts as $post)
        <tr>
            <td><h2>{{ $post->titulo }}</h2></td>

            <td><a class="btn btn-primary" href="{{ route('posts.show', $post) }}">Ver</a></td>
            <td>
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-primary">Borrar</button>
                    </form>
            </td>
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



