@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <h2>Titulo: {{ $post->titulo }} </h2>
    <h2>Contenido: {{ $post->contenido }}</h2>
    <h2>Creado:{{ $post->created_at}} </h2>
    <table>
        <tr>
            <td><a class="btn btn-primary" href="{{ route('posts.show', $post) }}">Editar</a></td>

            <td>
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Borrar</button>
                    </form>
            </td>
        </tr>
    </table>
@endsection
