<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    

        require('../conexion.php');
    ?>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Preparar la sentencia SELECT
    $stmt = $_conexion->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    if ($resultado->num_rows == 0) {
        echo "<h2>El usuario $usuario no existe</h2>";
    } else {
        $datos_usuario = $resultado->fetch_assoc();
        $acceso_concedido = password_verify($contrasena, $datos_usuario["contrasena"]);
        
        if ($acceso_concedido) {
            // todo bien
            session_start();
            $_SESSION["usuario"] = $usuario;
            // Redirigir a la página principal
            header("location: ../index.php");
            exit;
        } else {
            echo "<h2>La contraseña es incorrecta</h2>";
        }
    }

    // Cerrar la sentencia
    $stmt->close();
}

?>
    <div class="container">
        <h1>Iniciar sesión</h1>

        <form class="col-6" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input class="form-control" type="text" name="usuario">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input class="form-control" type="password" name="contrasena">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Iniciar sesión">
            </div>
        </form>
        <div class="mb-3">
            <h3>O, si aún no tienes cuenta, regístrate</h3>
            <a class="btn btn-secondary" href="registro.php">Registrarse</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>