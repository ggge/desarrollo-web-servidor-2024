<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
</head>
<body>

    <?php
    $numero = 2;

    if($numero > 0) {
        echo "<p>El número $numero es mayor que cero</p>";

    }

    if($numero > 0):
        echo "<p>3 El número $numero es mayor que cero<p>";
    endif; 

    


    //Forma 1
    if($numero > 0) {
        echo "<p>El número $numero es mayor que cero</p>";

    } elseif ($numero == 0) {
        echo "<p>1 El número $numero es cero</p>";

    } else {
        echo "<p>1 El número $numero es menor que cero<p>";
    }

    //Forma 2
    if ($numero > 0) echo "<p>2 El número $numero es mayor que cero </p>";
    elseif ($numero == 0) echo "<p>2 EL número $numero es menor que cero</p>";
    else echo "<p>2 El número $numero es menjor que cero </p>";


    //Forma 3
    if($numero > 0):
        echo "<p>3 El número $numero es mayor que cero<p>";
    elseif ($numero == 0):
        echo "<p>3 El número $numero es menor que cero</p>";
    else:
        echo "<p>1 El número $numero es menor que cero<p>";
    endif;

    ?>


    <?php
    # Rangos [-10,0),[0,10],(10,20)]

    $num = -7;

    # and o && para la conjunción

    if($num >= -10 and $num <= 0) {
        echo "<p>El número $num está en el rango [-10,0)";
    } elseif ($num >= 0 && $num <= 10) {
        echo "<p>El número $num está en el rango [0,10]</p>";
    } elseif($num > 10 and $num <= 20) {
        echo "<p>El número $num está en el rango (10,20]";
    } else {
        echo "<p>El número $num está fuera del rango";
    }



    if ($num >= -10 and $num <= 0) echo "<p>El número $num está en el rango [-10,0)";
    elseif ($num >= 0 && num <=10) echo "<p>El número $num está en el rango [0,10]</p>";
    else echo "<p>2 El número $num está fuera del rango </p>";




    if($numero >= -10 and $num <= 0):
        echo "<p>El número $num está en el rango [-10,0)</p>";
    elseif ($numero >= 0 && $num <= 10):
        echo "<p>El número $num está en el rango [0,10]</p>";
        elseif ($numero >= 10 && $num <= 20):
            echo "<p>El número $num está en el rango (s10,20]</p>";    
    else:
        echo "<p>1 El número $num está fuera del rango<p>";
    endif;



    /*
        COMPROBAR DE TRES FORMAS DIFERENTES, CON IF, SI EL NÚMERO ALEATORIO TIENE 1, 2 Ó 3 DÍGITOS
    */

    $numero_aleatorio = rand(1,200); /* incluye el 1 y el 200 */

    $numero_aleatorio_decimales = rand(10,100)/10;
    echo "$numero_aleatorio";
    $digitos = null;

    if($numero_aleatorio >9 && $numero_aleatorio<99) {
        echo "<p>El número $numero_aleatorio tiene dos dígitos</p>";
    } elseif ($numero_aleatorio >99) {
        echo "<p>El número $numero_aleatorio tiene tres dígitos</p>";
    } else {
        echo "<p>El número $numero_aleatorio tiene 1 dígito";
    }

    if ($numero_aleatorio > 9 && $numero_aleatorio < 99) 
        echo "<p>El número $numero_aleatorio tiene dos dígitos</p>";
    elseif ($numero_aleatorio > 99) {
        echo "<p>El número $numero_aleatorio tiene tres dígitos</p>";
    }
    else {
        echo "<p>El número $numero_aleatorio tiene 1 dígito";
    } 

    if($numero_aleatorio > 9 && $numero_aleatorio < 99):
        echo "<p>El número $numero_aleatorio tiene dos dígitos</p>";
    elseif ($numero_aleatorio >99):
        echo "<p>El número $numero_aleatorio tiene tres dígitos</p>";   
    else:
        echo "<p>El número $numero_aleatorio tiene 1 dígito";
    endif;
    /* es mejor: si es mayorigual que 1 y menorigual que 9 -- 1 dig
        si es mayorigual que 10 y menorigual que 99 -- 2 dig
        si mayorigual que 100 y menorigual que 200 -- 3 dig
    */


    /* esta es la mejor forma */
    if($numero_aleatorio >=1 && $numero_aleatorio <=9) {
        $digitos = 1;
    } elseif ($numero_aleatorio >= 10 && $numero_aleatorio <= 99) {
        $digitos = 2;
    } elseif ($numero_aleatorio >= 100 && $numero_aleatorio <= 200) {
        $digitos = 3;
    } else {
     $digitos = "ERROR";
    }

    echo "<p>El número $numero_aleatorio tiene $digitos dígitos </p>";

     /* VERSIÓN CON MATCH, VISTA EN FECHAS.PHP, LA FOKIN MEJOR */
    $digitos = match(true) {
        $numero_aleatorio >= 1 && $numero_aleatorio <= 9 => 1,
        $numero_aleatorio >= 10 && $numero_aleatorio <= 99 => 2,
        $numero_aleatorio >= 100 && $numero_aleatorio <= 999 => 3,
        defualt => "ERROR"
    };
    echo "<h1>EL número tiene $digitos digitos </h1>";

    /* ejemplo sin que funcione, pero ejemplo al fin y al cabo */
    $precioConIva = match($iva) {
        "GENERAL" => $precio + $precio * (GENERAL/100),
        "REDUCIDO" => $precio + $precio * (REDUCIDO/100),
        "SUPERREDUCIDO" => $precio + $precio * (GSUPERREDUCIDO/100),
        "SIN IVA" => $precio
    };

    /* */


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
    
    ?>
</body>
</html>