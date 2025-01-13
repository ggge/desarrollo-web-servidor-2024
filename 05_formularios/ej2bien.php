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
        $desde = $_POST["desde"];
        $hasta = $_POST["hasta"];
        $multiplo = $_POST["multiplo"];
        
        echo "<ol>";
        for ($i = $desde; $i <= $hasta; $i++) {
            if ($i % $multiplo == 0) {
                echo "<li>$i</li>";
                
            }
        }
        echo "</ol> ";
    }
    ?>
</body>
</html>
