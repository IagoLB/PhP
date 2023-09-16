<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Creamos un array asociativo

    $exploradores= array("explorador1" => "Chrome", "explorador2" => "Firefox", "explorador3" => "Edge");

    //Definimos diferentes tipos de datos para llamar a un valor
    $datos= array("nombre" => "pepe", "edad" => 21, "profesor" => "True", 3 => 100);

    echo "Explorador3: " . $exploradores["explorador3"];
    echo "<br>";
    echo "Nombre: " . $datos=["nombre"] . " edad: " . $datos["edad"] . " es profesor? " . $datos=["profesor"];
    echo "<br>";
    var_dump($exploradores);
    echo "<br>";
    var_dump($datos);   
    ?>
</body>
</html>