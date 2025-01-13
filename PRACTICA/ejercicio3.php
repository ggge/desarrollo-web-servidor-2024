<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Múltiplos enun Rango</title>
</head>
<body>
    <form method="post">
    <label >Temperatura original</label> 
    <input type="number" name ="numero"><br><br>
    <label >Elige una opción</label> 
    <select name="inicial">
        <option value="sumatorio">Sumatorio</option>
        <option value="factorial">Factorial</option>
</select>

<br><br>
    <input type="submit" value="Convertir">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $numero=$_POST["numero"];
        $inicial = $_POST["inicial"];

        if($inicial == "sumatorio") {
                $numero = $numero * (2);
            }elseif($inicial == "factorial"){
                $numero = $numero + $numero;
            }
        }
    ?>
</body>
</html>
