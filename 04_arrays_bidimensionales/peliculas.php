<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    $peliculas = [
        ["Kárate a muerte en Torremolinos", "Acción", 1975],
        ["Sharknado 1-5", "Acción", 2015],
        ["Princesa por sorpresa 2", "Comedia", 2008],
        ["Temblores 4", "Terror", 2018],
        ["Cariño, he encogido a los niños", "Aventuras", 2001],
        ["Stuart Little", "Infantil", 2000]
    ];


/*
    1. Añadir con un rand, la duración de cada película como una nueva columna.
        La duración será un número aleatorio entre 30 y 240.
    
    2. Añadir como una nueva columna, el tipo de película. EL tipo será:
    -Cortometraje, si la duración es menor que 60
    -Largometraje, si la duración es mayor o igual que 60

    3.Mostrar en otra tabla, todas las columnas, y ordenar además en este orden:
        1.Género
        2.Año
        3.Título (todo alfabétiamente, y el año más reciente a más antiguo)
*/

//ej 1
for($i=0; $i < count($peliculas); $i++) {
    $peliculas[$i][3] = rand(30,240);
    
    //ej 2
    if($peliculas[$i][3] < 60) $peliculas[$i][4] = "CORTOMETRAJE";
    else $peliculas[$i][4] = "LARGOMETRAJE";
}

//ej 3
/*  $_titulo = array_column($peliculas, 0);
    $_genero = array_column($peliculas, 1);
    $_año = array_column($peliculas, 2);

    array_multisort($_genero, SORT_ASC, $_año, SORT_DESC, $_titulo. SORT_ASC, $peliculas);
    */
    ?>

<table>
        <thead>
            <tr>
                <th>Película</th>
                <th>Categoría</th>
                <th>Año</th>
                <th>Duración</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($peliculas as $pelicula) {
                //print_r($videojuego);
                //echo $videojuego[0]; tambiwn podemos sacar asi las columnas
                echo"<br><br>";
                list($titulo, $categoria, $año, $duracion, $tipo) = $pelicula;

                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$categoria</td>";
                echo "<td>$año</td>";
                echo "<td>$duracion</td>";
                echo "<td>$tipo</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>