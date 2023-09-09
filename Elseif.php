<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Elseif
        $valor1 = 2;
        $valor2 = 6;
        $dia= 4;

        if($valor1>$valor2){
            echo "valor 1 es mayor que valor 2";
            echo "<br>";
        } elseif($valor2>$valor1){
            echo "valor 2 es mayor que valor 1";
            echo "<br>";

        } else{
            echo "los dos valores son iguales";
            echo "<br>";
        }

        if($dia == 1){
            echo "Lunes";
        }elseif($dia ==2) {
            echo "Martes";
        }elseif($dia ==3) {
        echo "Miercoles";
        }elseif($dia ==4) {
            echo "Jueves";   
        }
    ?>
</body>
</html>