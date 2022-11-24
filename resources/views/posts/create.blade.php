
@extends('plantilla')

@section('titulo', 'Nuevo post')

@section('contenido')

    <h1>Nuevo post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}">
            @if ($errors->has('titulo'))
                <div class="text-danger">
                    {{ $errors->first('titulo') }}
                </div>
            @endif
        </div>

        <br>

        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <input type="text" class="form-control" name="contenido" id="contenido" value="{{ old('contenido') }}">
            @if ($errors->has('contenido'))
                <div class="text-danger">
                    {{ $errors->first('contenido') }}
                </div>
            @endif
        </div>

        <br>

         <div class="form-group">
            <label for="user">Usuario:</label>
            <select class="form-control" name="user" id="user">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">
                    {{ $user->login }}
                    </option>
                @endforeach
            </select>
        </div>


        <br>
        <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
    </form>
@endsection
