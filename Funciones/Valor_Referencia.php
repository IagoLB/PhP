<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num1 = 5;
    $num2 = 10;

    //Valores originales
    echo "Valor del num1 = " . $num1 . " en el origen" . "<br>" . "<br>";
    echo "Valor del num2 = " . $num2 . " en el origen" . "<br>" . "<br>";

    //Paso por valor     
    function Multiplicacion($numero1){
        $numero1 *= 2;
    }
    
    echo "Valor del num1= " . $num1 . " antes de la funcion" . "<br>" . "<br>";    

    Multiplicacion($num1);
    echo "Valor del  num1= " . $num1 . " despues de la funcion" . "<br>" . "<br>";  

    //Paso por referencia
    function OtraMultiplicacion(&$num2){
        $num2 *= 2;
    }
       
    echo "Valor del num2= " . $num2 . " antes de la funcion" . "<br>" . "<br>";
    OtraMultiplicacion($num2);

    echo "Valor del num2= " . $num2 . " despues de la funcion" . "<br>" . "<br>";

    ?>
</body>
</html>