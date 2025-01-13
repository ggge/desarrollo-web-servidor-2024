<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $i = 1;

        echo "<ul>";
        while($i <= 10) {
            echo "<li>$i</li>";
            $i++;
        }
        echo "</ul>";

    ?>

    <h1>EJERCICICIO CON WHILE</h1>
    <p>Lista con WHILE alternativa</p>

    <?php
    $i = 1;

    echo "<ul>";
    while($i <= 10):
        echo "<li>$i</li>";
        $i++;
    endwhile;
    echo "</ul>";

    

    ?>


    <h3>EJERCICIO 1</h3>
    <p>Mostrar en una lista los números multiplos de 3 usando while e if</p>

    <?php
    $i = 1;
    echo "<ul>";
    while ($i <= 100) :
        if($i % 3 == 0) :
            echo "<li>$i<li>";
            endif;
            $i++;
        endwhile;    
    ?>

    <h3>EJERCICIO 2</h3>
    <p>calcular la suma de los numeros pares entre 1 y 20</p>

    <?php
    $i = 1;
    $suma = 0;
    while($i <= 20) {
        if($i %2 == 0) {
            $suma += 1;
        }
        $i++;
    }

?>    

<h3>EJERCICIO 3</h3>
<p>Calcular el factorial de 6 con while</p>

    <?php
    $numero = 6;
    $factorial = 1;
    $i = 1;
    while ($i <= $numero) {
        $factorial *= $i;
        $i++;
    }
    echo "<p>El factorial de $numero es $factorial</p>";
?>

<!-- LA MEJOR FORMA
 

    $factorial = 3;
    $resultado = 1;
    $i = 1;
    while ($i <= $factorial) {
        $resultado *= $i;
        $i++;
    }
    echo "<p>Solución: El factorial de $factorial es $ resultado</p>"



-->


<h1>EJERCICICIO CON FOR</h1>
<?php
    echo "<ul>";
    for($i = 1; $i <= 10; $i++) {
        echo "<li>$i</li>";
    }
    echo "</ul>"
 ?>

<h1>EJERCICICIO CON FOR ALTERNATIVO</h1>
<?php
    echo "<ul>";
    for($i = 1; $i <= 10; $i++) :
        echo "<li>$i</li>";
    endfor;
    echo "</ul>"
 ?>

<h1>EJERCICICIO CON FOR Y BREAK (coña??)</h1>
    <?php
    echo "<ul>";
    for( ; ; ) {
        if ($i > 10) {
            break;
        }
        echo "<li>$i</li>";
        $i++;
    }
    echo "</ul>";
    ?>

    <h1>EJERCICICIO 5</h1>
    <p>MUESTRA POR PANTALLA LOS 50 PRIMEROS NÚMEROS PRIMOS</p>
    <?php
    /**
     * 4 % 1 = 0 
     * 4 % 2 = 2
     * 4 $ 4 = 0
     * 
     * 5 % 2 = 1
     * 5 % 3 = 2
     * 5 % 4 = 1
     * /
     * for desde 2 hasta n-1 
     *      comprobar si 7 tiene divisores que den de resto 0
     *          si existe entonces devolver falso
     *          else devolver true
     * fin
     * */


    $n = 2;
    $nPrimos = 0;
    
echo "<ol>";
while ($nPrimos < 50) {
    $es_primo = true;
    for($i = 2; $i < $n; $i++) {
        if ($n % $i == 0){
            $es_primo = false;
            break;     
        }
    }
    if ($es_primo) {
        $nPrimos++;
        echo "<li>$n</li>";
    }
    $n++;
}
echo "</ol>";
   
?>
     
</body>
</html>