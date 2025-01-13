<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Múltiplos enun Rango</title>
</head>
<body>
    <form method="post">

      
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $desde = $_POST["desde"];
        $hasta = $_POST["hasta"];
        $multiplo = $_POST["multiplo"];


        
        echo "<ol>";
        for ($i = $desde; $i <= $hasta; $i++) {
            $esPrimo = true;
            for($j=2; $j<=$i/2; $j++){
                if ($i % $j == 0) {
                    $esPrimo = false;
                    break;
                }
            }
            if($esPrimo){
                $numerosPrimos++;
                echo "<li>$numero</li>";
            }
            $numero++;
        }
        echo "</ol> ";
    }
        /* $count = 0;
            for($i = $num; $i <= $num2; $i++){
                for($j = 1; $j <= $i; $j++){
                    if($i % $j == 0){
                        $count++;
                        
                    }
                }
                if($count == 2){
                    echo "<p>$i</p>";
                }
                $count = 0; */
    ?>


</body>
</html>
