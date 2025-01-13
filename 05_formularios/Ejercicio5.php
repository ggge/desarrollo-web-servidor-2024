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
            $salario_neto -= $salario_bruto * 0.19;
            $descuento1 = $salario_bruto * 0.19;
            
        } elseif ($salario_bruto <= 20199) {
            $salario_neto -= $salario_bruto * 0.24;
        } elseif ($salario_bruto <= 35199) {
            $salario_neto -= $salario_bruto * 0.3;
        } elseif ($salario_bruto <= 59999) {
            $salario_neto -= $salario_bruto * 0.37;
        } elseif ($salario_bruto <= 299999) {
            $salario_neto -= $salario_bruto * 0.47;
        } 
        else {
            $salario_neto -= $salario_bruto * 0.47;
        }

        echo "<p>El salario neto es: $salario_neto</p>";
    }
    ?>
</body>
</html>
