<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mayor de tres Números</title>
</head>
<body>
    <form method="post">
        Número 1: <input type="number" name="num1" required><br>
        Número 2: <input type="number" name="num2" required><br>
        Número 3: <input type="number" name="num3" required><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $mayor = max($num1, $num2, $num3);
        echo "El mayor de los tres números es: $mayor";
    }
    ?>
</body>
</html>
