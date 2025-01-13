<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Múltiplos enun Rango</title>
</head>
<body>
    <form method="post">
    <label >Temperatura original</label> 
    <input type="text" name ="temperatura"><br><br>
    <label >Unidad inicial</label> 
    <select name="inicial">
        <option value="C">Celsius</option>
        <option value="K">KElvin</option>
        <option value="F">Fahrenheit</option>
</select>
<label >Unidad final</label> 
<select name="final">
        <option value="C">Celsius</option>
        <option value="K">KElvin</option>
        <option value="F">Fahrenheit</option>
</select>
<br><br>
    <input type="submit" value="Convertir">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $temperatura=$_POST["temperatura"];
        $inicial = $_POST["inicial"];
        $final = $_POST["final"];

        $temperatura_final = $temperatura;
        if($inicial == "C") {
            if($final == "K"){
                $temperatura_final = $temperatura + 273.15;
            }elseif($final == "F"){
                $temperatura_final = $temperatura * (9/5);
            }
        }
    }


    //1 euro son 1'09 dollars, 163'38 yenes --- 1 dolar 
    ?>
</body>
</html>