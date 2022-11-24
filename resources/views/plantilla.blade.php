<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>

        @yield('titulo')

    </title>

</head>

<body>
    @include('partials.nav')
    <br>
    <div style="display: table ; width:100% ; padding:5px 10px" >
        @if (auth()->check())
        <h4 style="display: table-cell"> Usuario conectado: <b>{{ auth()->user()->login }}</b><h4>
        @endif
        <h4 style="display: table-cell ; text-align:right">Fecha actual: <?php  fechaActual() ?></h4>
    </div>
    <hr>
    @yield('contenido')

</body>
</html>
