@extends('plantilla')

@section('titulo', 'Blog')

@section('contenido')
    <h1>Página de inicio</h1>
    <br>
    @if (auth()->check())
    <h2> Bienvenido/a al blog: <b>{{ auth()->user()->login }}</b><h2>
    @else
    <h2>  Bienvenido/a al blog</h2>
    @endif
@endsection
