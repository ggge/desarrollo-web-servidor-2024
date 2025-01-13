<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
    //Creo el array vacio
        $vacio0 = [];


    //Creo los otros 2 arrays vacios
        $vacio1 = [];
        $fusion = [];


    //Lleno los arrays con 5 numeros aleatorios
    for ($i=0; $i < 4; $i++) { 
        array_push($vacio0, rand(1, 10));
        array_push($vacio1, rand(10, 100));

    }


    //Añado los dos arrays al que esta vacio
    array_push($fusion, $vacio0);
    array_push($fusion, $vacio1);
    print_r($fusion);
        

    //Muestro el contenido de cada array unidimensional.
    foreach ($vacio0 as $vacio) {
        echo "$vacio ,";
    }
    echo "<br>";
    foreach ($vacio1 as $vacio) {
        echo "$vacio ,";
    }


    $resultado1 = 0;
    $resultado2 = 0;

    //Media vacio 0
    foreach ($vacio0 as $vacio) {
        $resultado1 += $vacio;
    }
    
    $media = $resultado1/count($vacio0);
    echo "<p>La media del primer array unidimensional es: $media</p>" ;
    
    //Media vacio 1
    foreach ($vacio1 as $vacio) {
        $resultado2 += $vacio;
    }
    
    $media1 = $resultado2/count($vacio1);
    echo "<p>La media del segundo array unidimensional es: $media1</p>" ;
    
    ?>
</body>
</html>