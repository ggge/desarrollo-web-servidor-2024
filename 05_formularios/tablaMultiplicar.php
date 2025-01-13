<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Multiplicar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!--CREAR UN FORMULARIO QUE RECIBA UN NÚMERO 

    SE MOSTRARÁ LA TABLA DE MULTIPLICACIÓN DE ESE NÚMERO EN UNA TABLA HTML
    2x1=2   2x2=4...
-->

    <form action="" method="post">
        <label for="número">Número:</label>
        <input type="text" id="número" name="número">
        <input type="submit" value="Enga tira la tabla">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["número"];
        echo "<h4>Tabula de Multiplicar: $numero</h4>";
        echo "<table border='1'>";
        echo "<tr><th>Multiplicar</th><th>El que lo multiplica</th><th>Resultado</th></tr>";


        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
    
            echo "<tr><td>$numero</td><td>x$i</td><td>$resultado</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>




















<!--





    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        echo "<h2>Tabla de Multiplicación de $numero</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Multiplicación</th><th>Resultado</th></tr>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }
        
        echo "</table>";
    }
    ?>
</body>
</html>
-->


