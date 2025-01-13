<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
        require('../06_funciones/funciones.php');
    ?>
</head>
<body>
<form action="" method="post">
        <label for="base">Base</label><!--si pinchas base se abre base-->
        <input type="text" name="base" placeholder="Introduzca la base" id="base">
    <br>
        <label for="exponente">Exponente</label>
        <input type="text" name="exponente" placeholder="Introduzca el exponente" id ="exponente">
    <br>    
        <input type="submit" value="Enviar">

        
        
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Entramos en la respuesta</p>";
        $tmp_base = $_POST["base"];
        $tmp_exponente = $_POST["exponente"];


        if($tmp_base == '') {
            echo "<p>La base es obligatoria</p>";
        } else {
            if(filter_var($tmp_base, FILTER_VALIDATE_INT) === FALSE) {
                echo "<p>La base debe ser un número</p>";
            } else {
                $base = $tmp_base;
            }
        }
        if($tmp_exponente == '') {
            echo "<p>El exponente es obligatorio</p>";
        } else {
            if(filter_var($tmp_base, FILTER_VALIDATE_INT) === FALSE) {
                echo "<p>El exponente debe ser un número</p>";
        } else {
            if($tmp_exponente < 0) {
                echo "<p>El exponente debe ser mayor o igual que cero</p>";
            } else {
                $exponente = $tmp_exponente;
            }
        }
    }
/* mismo código pero más feo */
/*         if($tmp_base !=''){
            if(filter_var($tmp_base, FILTER_VALIDATE_INT) !== FALSE) {
                $base = $tmp_base;
            } else {
                echo "<p>La base debe ser un número</p>";
            }
        } else {
            echo "<p>La base es obligatoria</p>";
        } */

/*         if($tmp_exponente != '') {
            if(filter_var($tmp_exponente, FILTER_VALIDATE_INT) !== FALSE) {
                if($tmp_exponente >= 0) {
                    $exponente = $tmp_exponente;
                } else {
                    echo "<p>El exponente debe ser mayor o igual que cero</p>";
                }
            } else {
                echo "<p>El exponente debe ser un número</p>";
            }            
        } else {
            echo "<p>Eñ exponente es obligatoria</p>";
        }
 */

        if(isset($base) && isset($exponente)) {
            $resultado = potencia ($base, $exponente);
            echo "<h1>El resultado es $resultado</h1>";
        }

        
    }
?>

</body>
</html>