<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
    
</head>
<body>
    <?php

    /* ctrl shift a para comments */
    /**
     * TODOS LOS ARRAY EN PHP SON ASOCIATIVOS, COMO LOS MAP DE JAVA
     * 
     * TIENEN PARES CLAVE-VALOR
     */

     $numeros = [5,10,9,6,7,4];
     $numeros = array(6,10,9,4,3);

    print_r($numeros); #    PRINT RELATIONAL

    echo "<br></br>";

    $animales = ["Perro", "Gato", "Ornitorrinco", "Suricato", "Capicabara"];
    $animales = [
        "1.4" => "Perro",
        "true" => "Gato",
        "false" => "Ornitorrinco",
        "2e2" => "Suricato",
        "A05" => "Capibara",
    ];
    print_r($animales);

    $animales = array(
        "Perro",
        "Gato",
        "Ornitorrinco",
        "Capibara",
    );
    echo "<p>" . $animales[3] . "</p>";

    $animales[2] = "Koala";
    $animales[6] = "Iguana";
    $animales["A01"] = "Elefante";
    $animales[] = "Ganso"; //añade uno
    array_push($animales, "Morsa", "Foca"); //añade los que quiera
    print_r($animales);


    echo "<p>" . "</p>";//salto de línea

    unset($animales[1]); //muere el gato
    print_r($animales);

    echo "<p>" . "</p>";
    $animales = array_values($animales);
    //te devuelve el array ordenado aunque esté desordenado
    print_r($animales);


    $cantidad_animales = count($animales); 
    //cuenta el nº de valores en el array
    echo "<h3>Hay $cantidad_animales animales </h3";

     ?>

     <?php


 // mete 3 coches y matrículas, añade 2 sin matrículas, 
 //añade 1 sin matr, borra el que no tiene matr, 
 //resetea claves y almacena resultado en otro array

//meto 3

    $coches_array = [
        "4312 TDZ" => "Audi TT",
        "1122 FFF" => "Mercedes CLR",
        "3456 GHT" => "Nissan GTR",       
    ];
    print_r($coches_array);    
    echo "<p>" . "</p>";

//añado 2 con matrículas
    $coches_array["6734 FGT"] = "Golf";
    $coches_array["0923 TDR"] = "Peugeot 407";
    print_r($coches_array);  

//añado 1 sin matrícula y lo borro
    $coches_array[] = "Wolkswagen 2";
    unset($coches_array[0]);
    echo "<p>" . "</p>";
    print_r($coches_array);
    echo "<p>" . "</p>"; 

//reseteo las claves(matrículas y lo almaceno en otra    
    $coches2_array = array_values($coches_array);
    print_r($coches2_array); 

        ?>


    <?php


    echo "<h3>Lista de animales con for</h3>";
    echo "<ol>";

    for($i = 0; $i < count($animales); $i++) {
        echo "<li>" . $animales[$i] . "</li>";
    }
    echo "</ol>";

    $cantidad_animales = count($animales);
    echo "<h3>Hay $cantidad_animales animales con for</h3>";

    
    $contar = 0;

    echo "<h3>Lista de animales con while</h3>";
    echo "<ol>";
    while($contar < count($animales)) {
        echo "<li>" . $animales[$contar] . "</li>";
        $contar++;
    }
    echo "</ol>";
    $cantidad_animales = count($animales);
    echo "<h3>Hay $cantidad_animales animales con while</h3>";



    echo "<ol>";
    foreach($coches_array as $coche) {
        echo "<li>$coche<li>";
    }
    echo "</ol>";
    foreach($coches_array as $matricula => $coche) {
        echo "<li>$matricula, $coche</li>";
    }
    echo"</ol>";
    ?>


    <table>
        <caption>Coches</caption>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Coche</th>
            </tr>
        </thead>
            <tbody>
            <?php 
            foreach($coches_array as $matricula => $coche) {
                echo "<tr>";
                echo "<td>$matricula</td>";
                echo "<td>$coche</td>";
                echo "</tr>";           
            }
            ?>
                <tr>
                    <td>2133 FSD</td>
                    <td>Ferrari 255</td>
                </tr>
            </tbody>
    </table>


        <!-- imagina que tienes retraso, pues lo haces así-->
    <caption>Coches</caption>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Coche</th>
            </tr>
        </thead>
            <tbody>
            <?php 
            foreach($coches_array as $matricula => $coche) { ?>
                <tr>
                    <td><?php echo $matricula ?></td>
                    <td><?php echo $coche ?></td>                
                </tr>   
            <?php } ?>
            </tbody>
    </table>



</body>
</html>