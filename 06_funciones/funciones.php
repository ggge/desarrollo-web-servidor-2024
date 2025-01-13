<?php
    //  vamos a crear una funcion que reciba la temperatura, la unidad
    //  inicial y la final, y devuelva la temperatura final

    function convertirTemperatura(int|float $temperaturaInicial, $unidadInicial, $unidadFinal) :float {
        $temperaturaFinal = $temperaturaInicial;

        if($unidadInicial == "C") {
            if($unidadFinal == "K") {
                $temperaturaFinal = $temperaturaInicial + 273.15;
            } elseif($unidadFinal == "F") {
                $temperaturaFinal = ($temperaturaInicial * (9/5)) + 32;
            }
        } elseif($unidadInicial == "K") {
            if($unidadFinal == "C") {
    
            } elseif($unidadFinal == "F") {
    
            }
        } elseif($unidadInicial == "F") {
            if($unidadFinal == "C") {
                
            } elseif($unidadFinal == "K") {
    
            }
        }
        return $temperaturaFinal;
    }
?>

<?php
    function comprobarEdad(int $nombre, $edad) :int{
        $resultado = match(true) {
            $edad < 18 => "es menor de edad",
            $edad >= 18 and $edad <= 65 => "es mayor de edad",
            $edad > 65 => "se ha jubilado"
        };
        echo "<p>$nombre $resultado</p>";    
    }
?>

<?php

function conseguirMultiplo(int $desde, $hasta, $multiplo):int {
        echo "<ul>";
        for($i = $desde; $i <= $hasta; $i++) {
            if($i % $multiplo == 0) {
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
    }
?>

<?php
    function baseEXPONENTE (int|float $base, $exponente, $resultado) :float{
        for($i = 0; $i < $exponente; $i++) {
            $resultado = $resultado * $base;
        }
        echo "<p>El resultado es $resultado</p>";
    }
    ?>

<?php    
    function conseguirPrimos (int $desde, $hasta, $esPrimo) :int {
        echo "<ul>";
        for($i = $desde; $i <= $hasta; $i++) {
            $esPrimo = true;
            for($j = 2; $j <= $i/2; $j++) {
                if($i % $j == 0) {
                    $esPrimo = false;
                    break;
                }
            }
            if($esPrimo) {
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
    }


?>

<?php    
function mayorDe3 (int|float $numero1, $numero2, $numero3, $max) : float {
    $max = $numero1;

    if ($numero2 > $max) {
        $max = $numero2;
    }
    
    if ($numero3 > $max) {
        $max = $numero3;
    }
    echo "<p>El máximo es $max</p>";
}

?>

<?php 

function calcularPVP(int|float $precio, $iva): float {
    if ($precio != '' && $iva != '') {
        $pvp = match($iva) {
            "general" => $precio * GENERAL,
            "reducido" => $precio * REDUCIDO,
            "superreducido" => $precio * SUPERREDUCIDO,
        };
        return "<p>El PVP es $pvp</p>";
    } else {
        return "<p>Te faltan datos</p>";
    }
}
?>

<?php
    function potencia (int $base, $exponente): int {
        $resultado = 1;

        for($i = 0; $i < $exponente; $i++) {
            $resultado = $resultado * $base;
        }
        return $resultado;
    }
    ?>


<!-- function calcularPVP($precio, $iva) {
            if (filter_var($precio, FILTER_VALIDATE_FLOAT) && $precio > 0 && $iva != '') {
                $pvp = match($iva) {
                    "general" => $precio * GENERAL,
                    "reducido" => $precio * REDUCIDO,
                    "superreducido" => $precio * SUPERREDUCIDO,
                };
                return "<p>El PVP es $pvp</p>";
            } else {
                return "<p>Te faltan datos o el precio no es válido</p>";
            }
        }
    ?> -->
<?php
    function calcularIRPF(int|float $salario) : float {
        $salario_final = null;

        $tramo1 = (12450 * 0.19);
        $tramo2 = ((20200 - 12450) * 0.24);
        $tramo3 = ((35200 - 20200) * 0.30);
        $tramo4 = ((60000 -35200) * 0.37);
    }



?>