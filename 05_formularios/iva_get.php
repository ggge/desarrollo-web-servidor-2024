<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );
        define("GENERAL", 1.21);
        define("REDUCIDO", 1.1);
        define("SUPERREDUCIDO", 1.04);
    ?>
</head>
<body>
    <!--
    GENERAL = 21%
    REDUCIDO = 10%
    SUPERREDUCIDO = 4%
    10€ IVA = GENERAL, PVP = 12,1€ PVP = precio * 1.21
    10€ IVA = REDUCIDO, PVP = 11€  PVP = precio * 1.1
    -->
    <form action="" method="get">
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio">
        <br><br>
        <select name="iva">
            <option value="general">General</option>
            <option value="reducido">Reducido</option>
            <option value="superreducido">Superreducido</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    <!-- if(isset($_GET["precio"]) and isset($_GET["iva"])) {  if($_SERVER["REQUEST_METHOD"] == "GET") {-->
    <?php
    if(isset($_GET["precio"]) and isset($_GET["iva"])) {
        $precio = $_GET["precio"];
        $iva = $_GET["iva"];

        if($precio != '' and $iva != '') {
        $pvp = match($iva) {
            "general" => $precio * GENERAL,
            "reducido" => $precio * REDUCIDO,
            "superreducido" => $precio * SUPERREDUCIDO
        };
        echo "<p>El PVP es $pvp</p>";
    } else {
        echo "<p>Te faltan datos</p>";
    }
};
    ?>
</body>
</html>
