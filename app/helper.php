
<?php

use Carbon\Carbon;


function fechaActual(){

    $fecha = Carbon::now();
    $fecha = $fecha->format('d/m/Y');
    echo $fecha;
}
