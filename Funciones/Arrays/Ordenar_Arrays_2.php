<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Funciones con arrays asociativos: asort ,ksort y shuffle
    //$personas = ["Javier"(clave) => "29"(dato)]


    echo "Este el el array \$personas sin modificar";
    $personas = ["Javier" => "29","Juan" => "18", "Maria" => "26"];
    var_dump($personas);
    echo "<br>";
    
    //asort — Ordena un array y mantiene la asociación de claves
    echo "Este el el array \$personas ordenado y manteniendo las claves";
    asort($personas);
    var_dump($personas);
    echo "<p> </p>";

    //El sort ordena el array pero eliminando las claves
    echo "Este es el array \$personas eliminando las claves";
    sort($personas);
    var_dump($personas);
	echo "<p> </p>";

    //El ksort ordena el array por las claves (Aunque no se muestren)
    echo "Este es el array \$personas ordenado por las claves, aunque no se muestren";
    ksort($personas);
    var_dump($personas);
	echo "<p> </p>";

    //El shuffle ordena de forma aleatoria los arrays
    echo "Este es el array \$personas ordenado aleatoriamente";
    shuffle($personas);
    var_dump($personas);
    echo "<p> </p>";

    ?>
</body>
</html>