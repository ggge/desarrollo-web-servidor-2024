<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Liga</title>
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
    $tmp_equipo = $_POST["equipo"];
    $tmp_inicial = $_POST["inicial"];
    $tmp_ciudad = $_POST["ciudad"];
    $tmp_liga = $_POST["liga"];
    $tmp_titulo = $_POST["titulo"];
    $tmp_fecha = $_POST["fecha"];
        $fecha_actual = date("Y-m-d"); 
        $fecha_minima = '1889-12-18';
    $tmp_jugadores = $_POST["jugadores"];    
        $min_jugadores = 19;
        $max_jugadores = 32;

    //validar equipo
    if ($tmp_equipo == '') {
        $err_equipo = "El nombre del equipo es obligatorio";
    } else {
        if (strlen($tmp_equipo) < 1 || strlen($tmp_equipo) > 80) {
            $err_equipo = "El equipo debe tener entre 1 y 80 caracteres";
        } else {
            $equipo = $tmp_equipo;
        }
    }
    //validar inicial
    if($tmp_inicial == '') {
        $err_inicial = "Las iniciales son obligatorias";
    } else {
        //  letras de la A a la Z (mayus o minus), numeros y barrabaja (4-12 chars)
        $patron = "/^[a-zA-ZáéíóúÁÉÍÓÚüÜ\ç\Ç\ñ\Ñ]+$/";
        if(!preg_match($patron, $tmp_inicial)) {
            $err_inicial = "El usuario debe contener deben ser letras";
        } else {
            if (!strlen($tmp_inicial) == 3) {
                $err_inicial = "El equipo debe tener 3 caracteres";
            } else {
                $inicial = $tmp_inicial;
            }  
    }
}
    //validar liga
    if ($tmp_liga == '') {
        $err_liga = "Seleccionar una Liga es obligatorio";
    } else {
        $ligas_validos = ["Liga EA Sports", "Liga Hypermotion", "Liga Primera RFEF"];
        if (!in_array($tmp_liga, $ligas_validos)) {
            $err_liga = "La Liga seleccionado no es válido";
        } else {
            $liga = $tmp_liga;
        }
    }
    //validar ciudad
    if ($tmp_ciudad == '') {
        $err_ciudad = "La ciudad del equipo es obligatoria";
    } else {
        if (strlen($tmp_ciudad) < 1 || strlen($tmp_ciudad) > 80) {
            $err_ciudad = "Niño que haces pon una ciudad con un tamaño normal";
        } else {
            $ciudad = $tmp_ciudad;
        }
    }
    //validar titulo
    if ($tmp_titulo == '') {
        $err_titulo = "Seleccionar si tiene o no título es obligatorio";
    } else {
        $titulos_validos = ["Sí", "No"];
        if (!in_array($tmp_titulo, $titulos_validos)) {
            $err_titulo = "La Liga seleccionado no es válido";
        } else {
            $titulo = $tmp_titulo;
        }
    }
    //validar fecha
    if ($tmp_fecha == '') { 
        $err_fecha = "La fecha de fundación es obligatoria"; 
    } elseif ($tmp_fecha < $fecha_minima || $tmp_fecha > $fecha_actual) { 
        $err_fecha = "La fecha de fundación debe estar entre el 18 de diciembre de 1889 y hoy"; 
    } else { 
        $fecha = $tmp_fecha; 
    }
    //validar jugadores
    if ($tmp_jugadores == '') {
        $err_jugadores = "El número de jugadores es obligatorio";
    } else {
        if ($tmp_jugadores < $min_jugadores) {
            $err_jugadores = "El número de jugadores no puede ser menor a " . $min_jugadores;
        } elseif ($tmp_jugadores > $max_jugadores) {
            $err_jugadores = "El número de jugadores no puede ser mayor a " . $max_jugadores;
        } else {
            $jugadores = $tmp_jugadores;
        }
    }
}
?>

    <div class="container">
        <h1>Formulario de Ligas</h1>
        <form action="" class="col-2" method="post">
            <!-- formulario nombre -->
            <div class="mb-3">
                <label class="form-label">Nombre del Equipo</label>
                <input class="form-control" type="text" name="equipo">
                <?php if (isset($err_equipo)) echo "<span class='error'>$err_equipo</span>" ?>
            </div>
            <!-- formulario iniciales -->
            <div class="mb-3">
                <label class="form-label">Iniciales del Equipo</label>
                <input class="form-control" type="text" name="inicial">
                <?php if (isset($err_inicial)) echo "<span class='error'>$err_inicial</span>" ?>
            </div>
            <!-- formulario liga -->
             <div class="mb-3">
                <label class="form-label">Liga</label>
                <select class="form-control" name="liga">
                    <option value="">Selecciona...</option>
                    <option value="Liga EA Sports">Liga EA Sports</option>
                    <option value="Liga Hypermotion">Liga Hypermotion</option>
                    <option value="Liga Primera RFEF">Liga Primera RFEF</option>
                </select>
                <?php if (isset($err_liga)) echo "<span class='error'>$err_liga</span>" ?>
            </div>
            <!-- formulario ciudad -->
            <div class="mb-3">
                <label class="form-label">Ciudad del equipo</label>
                <input class="form-control" type="text" name="ciudad">
                <?php if (isset($err_ciudad)) echo "<span class='error'>$err_ciudad</span>" ?>
            </div>
            <!-- formulario titulo -->
            <div class="mb-3">
                <label class="form-label">Título</label>
                <select class="form-control" name="titulo">
                    <option value="">Selecciona...</option>
                    <option value="Sí">Sí</option>
                    <option value="No">No</option>
                </select>
                <?php if (isset($err_titulo)) echo "<span class='error'>$err_titulo</span>" ?>
            </div>
            <!-- formulario jugadores -->
            <div class="mb-3">
                <label class="form-label">Jugadores del Equipo</label>
                <input class="form-control" type="text" name="jugadores">
                <?php if (isset($err_jugadores)) echo "<span class='error'>$err_jugadores</span>" ?>
            </div>
            <!-- FEO FECHA -->
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
        if (isset($equipo) && isset($inicial) && isset($liga) && isset($ciudad) && isset($titulo) && isset($jugadores) && isset($fecha)) {
            echo "<h2>Datos enviados correctamente:</h2>";
            echo "<p>Equipo: $equipo</p>";
            echo "<p>Iniciales: $inicial</p>";
            echo "<p>Descripción: $ciudad</p>";
            echo "<p>Descripción: $titulo</p>";
            echo "<p>Descripción: $jugadores</p>";
            echo "<p>Fecha de lanzamiento: $fecha</p>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
