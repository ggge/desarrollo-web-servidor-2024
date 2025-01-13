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
    $tmp_titulo = $_POST["titulo"];
    $tmp_paginas = $_POST["paginas"];
/*     $tmp_genero = $_POST["genero"]; */
    $tmp_secuela = $_POST["secuela"];
    $tmp_sinopsis = $_POST["sinopsis"];
    $tmp_fecha = $_POST["fecha"];
    

    if($tmp_titulo == '') {
        $err_titulo = "El título es obligatorio";
    } else {
            $patron = "/^[a-zA-Z0-9áéióúÁÉÍÓÚñÑüÜ.,;\s]+$/";
            if(!preg_match($patron, $tmp_titulo)) {
                $err_titulo = "El nombre no cumple con los criterios";
            } else {
                $titulo = $tmp_titulo;
            }
    }

    if ($tmp_paginas == '') {
        $err_paginas = "El numero de páginas es obligatorio";
    } else {
        if ($tmp_paginas < 10 || $tmp_paginas > 9999) {
            $err_paginas = "Las páginas deben ser entre 10 y 9999";
        } else {
            $paginas = $tmp_paginas;
        }
    }

/*     $generos_validos = ["Fantasía", "CienciaFicción", "Romance", "Drama"];
    if($tmp_genero == '') {
        $err_genero = "Seleccionar un género es obligatorio";
    } else{
        if (!in_array($tmp_genero, $generos_validos)) {
            $err_genero = "El género seleccionado no es válido";
        } else {
            $genero = $tmp_genero;
        }
    } */

    if ($tmp_sinopsis == '') {
        /* opcional */
    } else{
        if (strlen($tmp_sinopsis) > 200) {
            $err_sinopsis = "La sinopsis no puede tener más de 200 caracteres";
        } else {
            $patron = "/^[a-zA-Z0-9áéióúÁÉÍÓÚñÑüÜ\s]+$/";
            if(!preg_match($patron, $tmp_sinopsis)) {
                $err_sinopsis = "La descripción no cumple con los criterios";
            } else {
                $sinopsis = $tmp_sinopsis;
            }
        
    }

    }



    $secuelas_validas = ["Sí", "No"];
    if($tmp_secuela == '') {
        /* opcional */
        $secuela = "No";
    } else{
        if (!in_array($tmp_secuela, $secuelas_validas)) {
            $err_secuela = "Solo puedes marcar si tiene secuela o no";
        } else {
            $secuela = $tmp_secuela;
        }
    }

    if ($tmp_fecha == '') {
        $err_fecha = "La fecha de lanzamiento es obligatoria";
    } else {
        $fecha_minima = '1800-01-01';
        if ($tmp_fecha < $fecha_minima) {
            $err_fecha = "La fecha de lanzamiento no puede ser anterior a 1947";
        } else {
            $fecha = $tmp_fecha;
        }
    }
}
?>

    <div class="container">
        <h1>Formulario de Libro</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Título del libro</label>
                <input class="form-control" type="text" name="titulo">
                <?php if (isset($err_titulo)) echo "<span class='error'>$err_titulo</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Páginas</label>
                <input class="form-control" type="text" name="paginas">
                <?php if (isset($err_paginas)) echo "<span class='error'>$err_paginas</span>" ?>
            </div>
<!--             <div class="mb-3">
                <label class="form-label">Género</label><br>
                <input type="radio" name="genero" value="Fantasía"> Fantasía<br>
                <input type="radio" name="genero" value="CienciaFicción"> CienciaFicción<br>
                <input type="radio" name="genero" value="Romance">Romance<br>
                <input type="radio" name="genero" value="Drama"> Drama<br>
                <?php if (isset($err_genero)) echo "<span class='error'>$err_genero</span>" ?>
            </div> -->
            <div class="mb-3">
            <div class="mb-3">
                <label class="form-label">¿Tiene secuela?</label>
                <select class="form-control" name="secuela">
                    <option value="">Selecciona...</option>
                    <option value="Sí">Sí</option>
                    <option value="No">No</option>
                </select>
                <?php if (isset($err_secuela)) echo "<span class='error'>$err_secuela</span>" ?>
                <div class="mb-3">
                <label class="form-label">Sinopsis</label>
                <textarea class="form-control" name="sinopsis" rows="3"></textarea>
                <?php if (isset($err_sinopsis)) echo "<span class='error'>$err_sinopsis</span>" ?>
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
        if (isset($titulo) && isset($paginas) && isset($genero) && isset($secuela) && isset($sinopsis) && isset($fecha)) {
            echo "<h2>Datos enviados correctamente:</h2>";
            echo "<p>Título: $titulo</p>";
            echo "<p>Páginas: $paginas</p>";
            echo "<p>Género: $genero</p>";
            echo "<p>Secuela: $secuela</p>";
            echo "<p>Sinopsis: $sinopsis</p>";
            echo "<p>Fecha de lanzamiento: $fecha</p>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>