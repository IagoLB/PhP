<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num1 = 5;
    $num2 = 10;
    $num3 = 5;
    $num4 = 20;
    $num5 = 5;

    $activo1 = true;
    $activo2 = false;

    echo "Comparando num1&num3 && num3&num4";
    echo "<br>";
    if ($num1==$num3 && $num3==$num4) {
        echo "Los valores son iguales";
        echo "<br>";

    } else {
        echo "Los valores no son iguales";
    }
    echo "<br>";
    echo "<br>";

    echo "Comparando num1&num3 || num3&num4";
    echo "<br>";
    if ($num1==$num3 || $num3==$num4) {
        echo "Al menos un par de valores son iguales";
        echo "<br>";

    } else {
        echo "Los valores no son iguales";
    }

    echo "<br>";

    if(!$activo1){
        echo "Es true";
    } else {
        echo "Es falso";
    }
    ?>
</body>
</html>