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
    <h4 style="text-align:right">Fecha actual: <?php  fechaActual() ?></h4>
    <hr>
    @yield('contenido')
</body>
</html>
