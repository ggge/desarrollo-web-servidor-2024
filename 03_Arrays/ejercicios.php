<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- EJERCICIO 1
     
        Desarrollo web en entorno servidor => Alejandra
        Desarrollo web en entorno cliente => José Miguel
        Diseño de interfaces web => José Miguel
        Desplique de aplicaciones => Jaime
        Empresa e iniciativa emprendedora => Andrea
        Inglés => Virginia
        
        MOSTRARLO EN TABLA -->

    <!-- EJERCICIO 2 
     
    Francisco => 3
    Daniel => 5
    Aurora => 10
    Luis => 7
    Samuel => 9
    si está aprobado, verde o rojo suspenso
    -->

    

<!-- ej1 -->
<?php 
    $profesores = [
        "Desarrollo web en entorno servidor" => "Alejandra",
        "Desarrollo web en entorno cliente" => "José Miguel",
        "Diseño de interfaces web" => "José Miguel",
        "Despliegue de aplicaciones" => "Jaime", 
        "Empresa e iniciativa emprendedora" => "Alejandra", 
        "Inglés" => "Virginia",         
    ];
    print_r($profesores); 
    
    ?>


    <table>
        <caption>Profesorado</caption>
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Profesor</th>
            </tr>
        </thead>
            <tbody>
            <?php
            sort($profesores);
            foreach($profesores as $asignatura => $profesor) {
                echo "<tr>";
                echo "<td>$asignatura</td>";
                echo "<td>$profesor</td>";
                echo "</tr>";           
            }
            ?>
            </tbody>
    </table>

<!-- ej2 -->
    <?php 
    $alumnos = [
        "Francisco" => "3",
        "Daniel" => "5",
        "Aurora" => "10",
        "Luis" => "7", 
        "Vicente" => "9",       
    ];
    print_r($alumnos);
    ?> 


    <table>
    <caption>Alumnos</caption>
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Nota</th>
            <th>Suspenso/Aprobado</th>
        </tr>
    </thead>
        <tbody>
            <tr>
                <!-- aquí es meter colores de si es aprobado o suspenso -->
            </tr>
        <?php 
        foreach($alumnos as $alumno => $nota) {
            if ($nota > 4){
            echo "<tr>";
            echo "<td>$alumno</td>";
            echo "<td>$nota</td>";
            echo "<td>APROBADO</td>";
            echo "</tr>"; 
            }
            
            elseif ($nota<5) {
                echo "<tr class=rojoPSOE>";
                echo "<td class=rojoPSOE>$alumno</td>";
                echo "<td>$nota</td>";
                echo "<td>SUSPENSO</td>";
                echo "</tr>";
            }          
        }
        ?>
        </tr>
    </tbody>
    </table>
        Insertar dos nuevos estudiante, con notas aleatorias entre 0 y 10
        Borrar a uno por la clave
        
        
        <?php 
        $alumno["Paula"] = rand(0,10);
        $alumnos["Waluis"] = rand(0,10);
        unset($alumnos["Vicente"]);

        krsort($alumnos);
        ?>

        <table>
            <caption>Estudiantes ordenados por el nombre al revés</caption>
                <thead>
                    <tr>
                        <th>Esutdiante</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
            <tr>
                <!-- aquí es meter colores de si es aprobado o suspenso -->
            </tr>
        <?php 
        arsort($alumnos);
        foreach($alumnos as $alumno => $nota) {
            if ($nota > 4){
            echo "<tr>";
            echo "<td>$alumno</td>";
            echo "<td>$nota</td>";
            echo "<td>APROBADO</td>";
            echo "</tr>"; 
            }
            
            elseif ($nota<5) {
                echo "<tr class=rojoPSOE>";
                echo "<td class=rojoPSOE>$alumno</td>";
                echo "<td>$nota</td>";
                echo "<td>SUSPENSO</td>";
                echo "</tr>";
            }          
        }
        ?>
        </tr>
    </tbody>
    </table>
        

    <!-- https://www.php.net/manual/en/array.sorting.php -->



</body>
</html>