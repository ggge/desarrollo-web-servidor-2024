<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Múltiplos enun Rango</title>
</head>
<body>
    <form method="post">
        Número a: <input type="number" name="a" required><br>
        Número b: <input type="number" name="b" required><br>
        Número c: <input type="number" name="c" required><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        echo "Los multiplos de $c entre $a y $b son: ";
        for ($i = $a; $i <= $b; $i++) {
            if ($i % $c == 0) {
                echo $i . " ";
            }
        }
    }
    ?>
</body>
</html>
