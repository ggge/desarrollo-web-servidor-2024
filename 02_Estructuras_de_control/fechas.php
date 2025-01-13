<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display errors",1);
    ?>
</head>
<body>

<?php 
    $numero = "2a";
    $numero = (int) $numero; /* esto pasa el numero a entero (int) y así le quitamos la a*/
    echo $numero;

    if($numero === 2) {
        echo "<p>ÉXITO</p>";
    } else {
        echo "<p>SIN ÉXITO</p>";
    }

    /* 
        el comparador === significa idéntico

        "2" == 2    ---    "2"  SÍ es igual a       2
        "2" !=== 2  ---    "2"  NO es idéntico a    2
        2 === 2     ---     2   SÍ es idéntico a    2
        2 !== 2.0   ---     2   NO es idéntico a    2
    */

    $hora = (int)date("G"); /* la G devuelve la hora con formato 24h */
    //var_dump($hora);

    /*
        SI $hora ENTRE 6 y 11, es MAÑANA
        SI $hora ENTRE 12 y 14, es MEDIODÍA
        SI $hora ENTRE 15 y 20, es TARDE
        SI $hora ENTRE 21 y 24, es NOCHE
        SI $hora ENTRE 1 y 5, es MADRUGADA
    */

    if($hora >=6 && $hora <=11) {
        echo "<p>Es por la mañana</p>";
    } elseif ($hora >=12 && $hora<=14) {
        echo "<p>Es por el mediodía</p>";
    } elseif ($hora >=15 && $hora<=20) {
        echo "<p>Es por la tarde</p>";
    } elseif ($hora >=21 && $hora<=24) {
        echo "<p>Es por la noche</p>";
    } else {
        echo "<p>Es por la madrugada</p>";
    }

    $hora_exacta = date("H:i:s:u"); /* el u son microsegundos pero no los pilla */
    echo "<h1>$hora_exacta</h1>";

    $dia = date("l");
    echo "<h2>Hoy es $dia</h2>";

    /*
        TENEMOS CLASE LUNES, MIÉRCOLES Y VIERNES
        NO TENEMOS CLASE EL RESTO

        HACER UN SWITCH QUE DIGA SI HOY TENEMOS CLASE
    */

    switch($dia) {
        case "Monday":
        case "Wednesday":
        case "Friday":
            echo "Hoy hay clase";
            break;
        default:
            echo "Hoy no hay clase";
    }

    /* hay que sacar $dia como español, con estructura match
       es el switch pero con asteroides */

    $dia = date('l');
    $dia_espanol = null;

    $dia_espanol = match($dia) {
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miércoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sábado",
        "Sunday" => "Domingo",
    };
    echo "<p>Hoy es $dia_espanol</p";
    /* es como un if aquí que dice si el dia es monday, el 
    dia espanol es lunes, y de ahí para abajo */


    /* OTRO EJEMPLO DE MATCH. SI TENEMOS: 
        $n = rand(1,3);

    switch($n) {
        case 1:
            echo "El número es 1";
            break;
        case 2:
            echo "El número es 2";
            break;
        default:
            echo "El número es 3";
    }
    */
    $n = rand(1,3);
    $resultado = match($n) {
        1 => "El número es 1",
        2 => "El número es 2",
        3 => "El número es 3"
    };
    echo "<h3>$resultado</h3>"


    ?>


</body>
</html>