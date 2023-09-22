<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Funciones con arrays: sort y rsort

    $dias = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];

    echo "Estos son los dias de la semana";
    echo "<br>";

    var_dump($dias);
    echo "<p> </p>";

    echo "Estos son los dias de la semana ordenados por orden alfabetico";
    sort($dias);
    var_dump($dias);
    echo "<p> </p>";
    
    echo "Estos son los dias de la semana ordenados por orden alfabetico inverso";
    rsort($dias);
    var_dump($dias);
    echo "<p> </p>";
    echo "<br>";

    $numeros = [2,65,21,98,1];
    echo "Esta es una lista numerica";
    echo "<br>";

    var_dump($numeros);
    echo "<p> </p>";

    echo "Esta es una lista numerica ordenada de menor a mayor";
    echo "<br>";
    sort($numeros);
    var_dump($numeros);
    echo "<p> </p>";

    echo "Esta es una lista numerica ordenada de mayor a menor";
    echo "<br>";
    rsort($numeros);
    var_dump($numeros);
    echo "<p> </p>";

    ?>
</body>
</html>