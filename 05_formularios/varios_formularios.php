<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varios formularios</title>
    <link rel="stylesheet" href="./css/estilos.css" >
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require('../06_funciones/funciones.php');

    ?>
</head>

<body>

    <h1>Formulario temperaturas</h1>
    <form action="" method="post">
        <label>Temperatura original</label>
        <input type="text" name="temperatura"><br><br>
        <label>Unidad original</label>
        <select name="inicial">
            <option value="C">Celsius</option>
            <option value="K">Kelvin</option>
            <option value="F">Fahrenheit</option>
        </select><br><br>
        <label>Unidad final</label>
        <select name="final">
            <option value="C">Celsius</option>
            <option value="K">Kelvin</option>
            <option value="F">Fahrenheit</option>
        </select>
        <br><br>
        <input type="hidden" name="accion" value="formulario_temperaturas">
        <input type="submit" value="Convertir">
    </form> <br><br>





    <h1>Formulario múltiplos</h1>
    <form action="" method="post">
        <label>Desde</label>
        <input type="text" name="desde"><br><br>
        <label>Hasta</label>
        <input type="text" name="hasta"><br><br>
        <label>Múltiplo</label>
        <input type="text" name="multiplo"><br><br>
        <input type="hidden" name="accion" value="formulario_multiplos">
        <input type="submit" value="Sacar máximo">
    </form> <br><br>





    <h1>Formulario edades</h1>
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad"><br><br>
        <input type="hidden" name="accion" value="formulario_edades">
        <input type="submit" value="Enviar">
    </form> <br><br>





    <h1>Formulario base-exponente</h1>
    <form action="" method="post">
        <label for="base">Base</label>
        <input type="text" name="base" id="base" placeholder="Introduzca la base"><br><br>
        <label for="exponente">Exponente</label>
        <input type="text" name="exponente" id="exponente" placeholder="Introduzca el exponente"><br><br>
        <input type="hidden" name="accion" value="formulario_baseEXPONENTE">
        <input type="submit" value="Calcular">
    </form><br><br>





    <h1>Formulario números primos</h1>
    <form action="" method="post">
        <label>Desde</label>
        <input type="text" name="desde"><br><br>
        <label>Hasta</label>
        <input type="text" name="hasta"><br><br>
        <input type="hidden" name="accion" value="formulario_primos">
        <input type="submit" value="Calcular primos">
    </form><br><br>





    <h1>Formulario mayor de tres números</h1>
    <form action="" method="post">
        <input type="text" name="numero1"><br><br>
        <input type="text" name="numero2"><br><br>
        <input type="text" name="numero3"><br><br>
        <input type="hidden" name="accion" value="formulario_mayor3">
        <input type="submit" value="Sacar máximo">
    </form><br><br>





    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //  Formulario de edades
        if ($_POST["accion"] == "formulario_edades") {
            $nombre = $_POST["nombre"];
            $edad = $_POST["edad"];

            comprobarEdad($nombre, $edad);
        }

        //  Formulario de temperaturas
        if ($_POST["accion"] == "formulario_temperaturas") {
            $temperatura = $_POST["temperatura"];
            $inicial = $_POST["inicial"];
            $final = $_POST["final"];
            
            if($temperatura != '') {
                if(is_numeric($temperatura)) {
                    if($inicial == "C" and $temperatura >= -273.15) {
                        echo convertirTemperatura($temperatura, $inicial, $final);
                    } elseif ($inicial == "C" and $temperatura < -273.15) {
                        echo "<p>La temperatura no puede ser inferior a -273.15 C</p>";
                    }
                    if($inicial == "K" and $temperatura >= 0) {
                        echo convertirTemperatura($temperatura, $inicial, $final);
                    } elseif ($inicial == "K" and $temperatura <0) {
                        echo "<p>La temperatura no puede ser inferior a 0 K</p>";
                    }
                    if($inicial == "F" and $temperatura >= -459.67) {
                        echo convertirTemperatura($temperatura, $inicial, $final);
                    } elseif ($inicial == "F" and $temperatura < -459.67) {
                        echo "<p>La temperatura no puede ser inferior a -459.67 F</p>";
                    }        
                } else {
                    echo "<p>La temperatura debe ser un número</p>";
                }
            } else {
                echo "<p>Falta la temperatura</p>";
            }
        }
        //  Formulario de múltiplos
        if ($_POST["accion"] == "formulario_multiplos") {
            $desde = $_POST["desde"];
            $hasta = $_POST["hasta"];
            $multiplo = $_POST["multiplo"];

            conseguirMultiplo($desde, $hasta, $multiplo);
        }
        //  Formulario de potencias
        if ($_POST["accion"] == "formulario_base-eXPONENTE") {
            $base = $_POST["base"];
            $exponente = $_POST["exponente"];
            $resultado = 1;

            po($base, $exponente, $resultado);
        }
        //Formulario de números primos
        if ($_SERVER["REQUEST_METHOD"] == "formulario_primos") {
            $desde = $_POST["desde"];
            $hasta = $_POST["hasta"];

            conseguirPrimos($desde, $hasta, $esPrimo);
        }

        //Formulario de mayor de 3
        if ($_SERVER["REQUEST_METHOD"] == "formulario_mayor3") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $numero3 = $_POST["numero3"];

            mayorDe3($numero1, $numero2, $numero3, $max);
        }
    }
    ?>
</body>

</html>