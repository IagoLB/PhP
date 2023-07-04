<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Definimos una serie de arrays
        $dias=array("L","M","M","J","V","S","D");
        $temperatura= [10,20,30,40];
        //Definimos que el array tendra 15 espacios pero no especificamos con que llenarlo
        $vacio= array(15);
        //Definimos la creacion de un array sin concretar nada
        $datos= array();

        echo $dias[3];
        echo "<br>";
        echo $temperatura[0];
        echo "<br>";

        var_dump($dias);
        echo "<br>";
        var_dump($temperatura);
    ?>
</body>
</html>