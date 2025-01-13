<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
</head>
<body>

<?php
//EJ1
    $animes = [
        ["Fullmetal Alchemist", "Shonen"],
        ["Shingeki no Kyojin", "Shonen"],
    ];  
//1.1
    array_push($animes, ["Steins;gate", "Ciencia Ficción"]);
    array_push($animes, ["Steins;gate", "Ciencia Ficción"]);
//1.2
    unset($animes[0]);
//1.3
for($i=0; $i < count($animes); $i++) {
    $animes[$i][2] = rand(1990,2024);
    
    /* if($peliculas[$i][3] < 60) $peliculas[$i][4] = "CORTOMETRAJE";
    else $peliculas[$i][4] = "LARGOMETRAJE"; */
}
//1.4
for($i=0; $i < count($animes); $i++) {
    $animes[$i][3] = rand(1,99);
}
//1.5
for($i=0; $i < count($animes); $i++) {
    $animes[$i][4] = "";

    if($animes[$i][3] < 2024) {
        $animes[$i][4] = "Ya disponible";
    }
    else {
        $animes[$i][4] = "Próximamente";
    }
    }

    $_titulo = array_column($animes, 0);
    $_genero = array_column($animes, 1);
    $_anio = array_column($animes, 2);
    $_capitulos = array_column($animes, 3);
    /* $_estreno = array_column($animes, 4); */

    /* array_multisort($_categoria, SORT_ASC, $_precio, SORT_DESC, $animes); */
    // si fuera descendente, SORT_DESC
    /* array_multisort($_titulo, SORT_ASC, $animes); */
    

    ?>

<table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Género</th>
                <th>Año Estreno</th>
                <th>Capítulos</th>
                <th>Disponibilidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach($animes as $anime) {
                //print_r($videojuego);
                //echo $videojuego[0]; tambiwn podemos sacar asi las columnas
                echo"<br><br>";
                list($titulo, $genero, $anio, $capitulos) = $anime;

                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$genero</td>";
                echo "<td>$anio</td>";
                echo "<td>$capitulos</td>";
                /* echo "<td>$estreno</td>"; */
                echo "</tr>";
            }
            ?>
</body>
</html>
por que me da error la linea 78 y corrigemelo