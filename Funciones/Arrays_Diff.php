<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Funciones con arrays: Diff

    $array1 = [1,3,6,8,9];
    $array2 = [1,2,4,5,6,7];

    echo "Este es el 1º array";
    var_dump($array1);

    echo "<br>";

    echo "Este es el 2º array";
    var_dump($array2);


    //El array_diff solo devuelve las entradas presentas en el array1 que no estan presentes en otros arrays
    $union= array_diff($array1,$array2);

    echo "<br>";

    echo "Esta es la diferencia entre los arrays";
    var_dump($union);
    echo "<p> </p>";

    ?>
</body>
</html>