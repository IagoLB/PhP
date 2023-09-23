<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Funciones con arrays: asort ,ksort y shuffle
        echo "Este el el array \$dias sin modificar";
        $dias = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
        var_dump($dias);
        echo "<br>";

        //asort — Ordena un array y mantiene la asociación de claves
        echo "Este el el array \$dias ordenado y manteniendo las claves";
        asort($dias);
        var_dump($dias);
        echo "<p> </p>";

        //El sort ordena el array pero eliminando las claves
        echo "Este es el array \$dias eliminando las claves";
        sort($dias);
        var_dump($dias);
        echo "<p> </p>";

        //El ksort ordena el array por las claves (Aunque no se muestren)
        echo "Este es el array \$dias ordenado por las claves, aunque no se muestren";
        ksort($dias);
        var_dump($dias);
        echo "<p> </p>";

        //El shuffle ordena de forma aleatoria los arrays
        echo "Este es el array \$dias ordenado aleatoriamente";
        shuffle($dias);
        var_dump($dias);
        echo "<p> </p>";

    ?>
</body>
</html>