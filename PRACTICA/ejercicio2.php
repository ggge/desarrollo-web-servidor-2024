<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>

<?php
$array = [];
$array2 = [];

$array = ["", "", "", "", ""];
$array2 = ["", "", "", "", ""];

for($i = 0; $i < count($array); $i++) {
    $array[$i] = rand(1,10);
}

for($i = 0; $i < count($array2); $i++) {
    $array2
    [$i] = rand(10,100);
}
for($i = 0; $i < count($array); $i++) {
    echo "" . $array[$i] . ",";
}
echo "<br>";
for($i = 0; $i < count($array2); $i++) {
    echo "" . $array2[$i] . ",";
}
/* $arrayBid = [$array,$array2];
print_r($arrayBid); */
/* print_r($array);
print_r($array2); */


echo "<p>" . "</p>";
print_r($array);
echo "<p>" . "</p>";

$mayor = 1;
$mayor2 = 1;
$resultado1 = 1;
$resultado2 = 1;
$media1 = 1;
$media2 = 1;

for($i = 0; $i < count($array); $i++) {

    if ($array[$i] > $mayor) {
         $mayor = $array[$i];
    }else {

    }
}

for($i = 0; $i < count($array); $i++) {

    if ($array[$i] > $mayor) {
        $array[$i] == $mayor;
    }else {

    }
}

for($i = 0; $i < count($array2); $i++) {
    $mayor2 = $array2[$i];
    if ($array2[$i] > $mayor2) {
        $array2[$i] = $mayor2;
    }
}




echo "El mayor del primer array es " .$mayor;
echo "El mayor del segundo array es " .$mayor2;






?>

</body>
</html>