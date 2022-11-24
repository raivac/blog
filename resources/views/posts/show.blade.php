@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <h2>Titulo: {{ $post->titulo }} </h2>
    <h2>Contenido: {{ $post->contenido }}</h2>
    <h2>Creado:{{ $post->created_at}} </h2>
    <table>
        <tr>
            @if(auth()->check())
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
    </table>
@endsection
