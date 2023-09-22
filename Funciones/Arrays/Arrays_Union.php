<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Funciones con arrays: Union

    $array1 = ["Rojo","Azul","Verde","Magenta"];
    $array2 = ["Purpura","Cian","Amarillo"];

    echo "Este es el 1º array";
    var_dump($array1);

    echo "<br>";

    echo "Este es el 2º array";
    var_dump($array2);



    //El array_merge combina todos los valores, y si hay repetidos se queda con el ultimo
    $union= array_merge($array1,$array2);

    echo "<br>";

    echo "Esta es la union de los arrays";
    var_dump($union);
    echo "<p> </p>";

    ?>
</body>
</html>