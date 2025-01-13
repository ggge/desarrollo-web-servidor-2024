<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <form action="" method="post"><!-- single page, post lo hace privado-->
        <input type="text" name="mensaje">

        <input type="text" name="veces">
        <!--aquí va otro input-->
        <input type="submit" value="Enviar">

    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    
    /*
    * Este código se ejecuta cuando el servidor recibe una petición POST
    */
    $mensaje = $_POST["mensaje"];
    $veces = $_POST["veces"]; //captura el mensaje que escribe el usuario
    
    for($i = 0; $i < $veces; $i++) {
        echo "<h1>$mensaje</h1>";
    } 


        //añadir al formulario un campo de texto adicional para introducir un número
        //mostrar el mensaje tantas veces como indique el número



    }
    ?>



<!--pones el mensaje, enviar, recargas con f5, inspeccionar, red, clicas en post, y vas
a solicitud. verás el mensaje. si quieres recargar sin mensaje pincha a la url y enter.
-->
 
</body>
</html>