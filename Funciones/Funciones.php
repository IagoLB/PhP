<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Funciones
    $numero1 = 5;
    $numero2 = 10;

    //Función sin parametros
    function sumar(){
        echo "Soy una funcion sin parametros";
    }

    echo sumar();

    echo "<br>";

    //Funcion con una variable y un valor fijo y sin retorno
    function SumarSinRetorno($num1,$num2){
        echo $num1 + $num2;
    }

    $Llamada=SumarSinRetorno($numero1,1);
    echo $Llamada;

    echo "<br>";

    //Funcion con parametros y retorno
    function SumarConRetorno($num3,$num4){
        return $num3 + $num4;
    }

    $resultado=SumarConRetorno($numero1,$numero2);
    echo $resultado;

    ?>
</body>
</html>