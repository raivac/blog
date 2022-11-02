@extends('plantilla')

@section('titulo', 'Listado posts')

@section('contenido')
    <h1>Listado de posts</h1>
    Introduce el id en la URL:
    <a href="{{route('posts_ficha')}}">  Ficha del post</a></button>
@endsection
