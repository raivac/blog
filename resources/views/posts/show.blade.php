@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <h2>Titulo: {{ $post->titulo }} </h2>
    <h2>Contenido: {{ $post->contenido }}</h2>
    <h2>Creado:{{ $post->created_at}} </h2>
@endsection
