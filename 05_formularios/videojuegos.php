<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Juego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmp_juego = $_POST["juego"];
    $tmp_consola = $_POST["consola"];
    $tmp_pegi = $_POST["pegi"];
    $tmp_descripcion = $_POST["descripcion"];
    $tmp_fecha = $_POST["fecha"];

    if ($tmp_juego == '') {
        $err_juego = "El nombre del juego es obligatorio";
    } else {
        if (strlen($tmp_juego) < 1 || strlen($tmp_juego) > 80) {
            $err_juego = "El juego debe tener entre 1 y 80 caracteres";
        } else {
            $juego = $tmp_juego;
        }
    }

    if ($tmp_consola == '') {
        $err_consola = "Seleccionar una consola es obligatorio";
    } else {
        $consolas_validas = ["Nintendo Switch", "PS5", "PS4", "Xbox Series X/S"];
        if (!in_array($tmp_consola, $consolas_validas)) {
            $err_consola = "La consola seleccionada no es válida";
        } else {
            $consola = $tmp_consola;
        }
    }

    if ($tmp_pegi == '') {
        $err_pegi = "Seleccionar un PEGI es obligatorio";
    } else {
        $pegis_validos = ["3", "7", "12", "16", "18"];
        if (!in_array($tmp_pegi, $pegis_validos)) {
            $err_pegi = "El PEGI seleccionado no es válido";
        } else {
            $pegi = $tmp_pegi;
        }
    }

    if ($tmp_descripcion != '') {
        if (strlen($tmp_descripcion) > 255) {
            $err_descripcion = "La descripción no puede tener más de 255 caracteres";
        } else {
            $descripcion = $tmp_descripcion;
        }
    }

    if ($tmp_fecha == '') {
        $err_fecha = "La fecha de lanzamiento es obligatoria";
    } else {
        $fecha_minima = '1947-01-01';
        if ($tmp_fecha < $fecha_minima) {
            $err_fecha = "La fecha de lanzamiento no puede ser anterior a 1947";
        } else {
            $fecha = $tmp_fecha;
        }
    }
}
?>

    <div class="container">
        <h1>Formulario de Juego</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Nombre del Juego</label>
                <input class="form-control" type="text" name="juego">
                <?php if (isset($err_juego)) echo "<span class='error'>$err_juego</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Consola</label><br>
                <input type="radio" name="consola" value="Nintendo Switch"> Nintendo Switch<br>
                <input type="radio" name="consola" value="PS5"> PS5<br>
                <input type="radio" name="consola" value="PS4"> PS4<br>
                <input type="radio" name="consola" value="Xbox Series X/S"> Xbox Series X/S<br>
                <?php if (isset($err_consola)) echo "<span class='error'>$err_consola</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">PEGI</label>
                <select class="form-control" name="pegi">
                    <option value="">Selecciona...</option>
                    <option value="3">3</option>
                    <option value="7">7</option>
                    <option value="12">12</option>
                    <option value="16">16</option>
                    <option value="18">18</option>
                </select>
                <?php if (isset($err_pegi)) echo "<span class='error'>$err_pegi</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion" rows="3"></textarea>
                <?php if (isset($err_descripcion)) echo "<span class='error'>$err_descripcion</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de lanzamiento</label>
                <input class="form-control" type="date" name="fecha" min="1947-01-01">
                <?php if (isset($err_fecha)) echo "<span class='error'>$err_fecha</span>" ?>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>

        <?php
        if (isset($juego) && isset($consola) && isset($pegi) && (isset($descripcion) || $tmp_descripcion == '') && isset($fecha)) {
            echo "<h2>Datos enviados correctamente:</h2>";
            echo "<p>Juego: $juego</p>";
            echo "<p>Consola: $consola</p>";
            echo "<p>PEGI: $pegi</p>";
            echo "<p>Descripción: $descripcion</p>";
            echo "<p>Fecha de lanzamiento: $fecha</p>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
