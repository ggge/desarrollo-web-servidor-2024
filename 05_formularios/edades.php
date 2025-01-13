<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
</head>
<body>


<!-- 
    CREAR UN FORMULARIO EN PHP QUE RECIBA EL NOMBRE Y LA EDAD DE UNA PERSONA

    SI LA EDAD ES MENOR QUE 18, SE MOSTRARÁ EL NOMBRE Y QUE ES MENOR DE EDAD

    SI LA EDAD ESTÁ ENTRE 18 Y 65, SE MOSTRARÁ EL NOMBRE Y QUE ES MAYOR DE EDAD

    SI LA EDAD ES MÁS DE 65, SE MOSTRARÁ EL NOMBRE Y QUE SE HA JUBILADO
-->


<form action="" method="post">
        <label for="nombre">Nombre</label><!--si pinchas base se abre base-->
        <input type="text" name="Nombre" placeholder="Introduzca el nombre" id="nombre">
    <br>
        <label for="edad">Edad</label>
        <input type="text" name="edad" placeholder="Introduzca la edad" id ="edad">
    <br>    
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        
        if ($edad < 18) {
            echo "<p>$nombre es menor de edad.</p>";
        } elseif ($edad <= 65) {
            echo "<p>$nombre es mayor de edad.</p>";
        } else {
            echo "<p>$nombre se ha jubilado.</p>";
        }
    }
    ?>



</body>
</html>