<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Recursidad
    function factorial($f){
        //Si el factorial es =1 devuelve 1
        if ($f==1){
            return 1;
        } else {
        //En caso de ser el factorial >1 concatena la variable con una x
            echo $f . " x ";
        //Devuelve el valor que le hayamos dado multiplicado por el numero inferior
        //Ejem: 9 x 8
            return $f * factorial($f-1);
        }
    }

    //Calculamos el factorial para el numero 10
    $resultado=factorial(10);
    echo "<br>";
    echo $resultado;

    ?>
</body>
</html>