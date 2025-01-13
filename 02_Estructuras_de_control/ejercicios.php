<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


/* SACAR LA FECHA CON LA ESTRUCTURA: VIERNES 27 DE SEPTIEMBRE DEL 2024 */
    $dia = date('l');
    $dia = match($dia) {
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miércoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sábado",
        "Sunday" => "Domingo",
    };


    $mes = date('F');
    $mes = match($mes) {
        "January" => "Enero",
        "February" => "Febrero",
        "March" => "Marzo",
        "April" => "Abril",
        "May" => "Mayo",
        "June" => "Junio",
        "July" => "Julio",
        "August" => "Agosto",
        "September" => "Septiembre",
        "October" => "Octubre",
        "November" => "Noviembre",
        "December" => "Diciembre",
    };
    $anio = date('Y');
    $numero_dia = date('j');

    echo "<h1>$dia $numero_dia  de $mes  de  $anio</h1";

    ?>
    
</body>
</html>