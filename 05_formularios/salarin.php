<!DOCTYPE html>
<html>
<head>
    <title>Calcular Salario Neto</title>
</head>
<body>
    <form method="post">
        <label for="salario">Salario Bruto:</label>
        <input type="number" id="salario" name="salario" required>
        <input type="submit" value="Calcular Neto">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario_bruto = $_POST["salario"];
        $salario_neto = $salario_bruto;

        
        // tramos de impuestos
        if ($salario_bruto <= 12450) {
            $descuento1 = $salario_bruto * 0.19;
            $salario_neto -= $descuento1;
            
        } elseif ($salario_bruto <= 20199) {
            $descuento1 = 12450 * 0.19;
            $descuento2 = (20199 - 12450) * 0.24;
            $salario_neto -= ($descuento1 + $descuento2);
        } elseif ($salario_bruto <= 35199) {
            $descuento1 = 12450 * 0.19;
            $descuento2 = (20199 -12450) * 0.24;
            $descuento3 = ($salario_bruto -20199);
            $salario_neto -= ($descuento1 + $descuento2 + $descuento3);
        } elseif ($salario_bruto <= 59999) {
            $descuento1 = 12450 * 0.19;
            $descuento2 = (20199 - 12450) * 0.24;
            $descuento3 = (35199 - 20199) * 0.3;
            $descuento4 = ($salario_bruto - 35199) * 0.37;
            $salario_neto -= ($descuento1 + $descuento2 + $descuento3 + $descuento4);
        } elseif ($salario_bruto <= 299999) {
            $descuento1 = 12450 * 0.19;
            $descuento2 = (20199 - 12450) * 0.24;
            $descuento3 = (35199 - 20199) * 0.3;
            $descuento4 = (59999 - 35199) * 0.37;
            $descuento5 = ($salario_bruto - 59999) * 0.47;
            $salario_neto -= ($descuento1 + $descuento2 + $descuento3 + $descuento4 + $descuento5);
        } 
        else {
            $salario_neto -= $salario_bruto * 0.47;
        }

        echo "<p>El salario neto es: $salario_neto</p>";
    }
    ?>
</body>
</html>
