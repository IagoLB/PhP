<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $num1=5;
    $num2=10;
    $num3=5;
    $valor1="5";

    //Comparacion de dos numeros diferentes
    if($num1==$num2) {
        echo "n1 y n2 son iguales";
        echo "<br>";
    } else {

        echo "n1 y n2 no son iguales";
        echo "<br>";
    }
    //Comparacion de dos numeros iguales
    if($num1==$num3) {
        echo "n1 y n3 son iguales";
        echo "<br>";    
    }

    //Comparacion de dos valores iguales
    if($num1===$valor1) {
        echo "n1 y valor1 son iguales";
        echo "<br>";    
    }

    //Comparacion de dos numeros no son iguales el !== verifica que es el mismo valor y el mismo tipo de dato
    if($num1!==$valor1) {
        echo "n1 y valor1 no son iguales";
        echo "<br>";
    }

    //Comparacion de dos numeros no son iguales != solo verifica el valor, sin tener en cuenta el tipo
    if($num1!=$valor1) {
        echo "n1 y valor1 no son iguales";
        echo "<br>";
    }

    //Comparacion de dos numeros no son iguales
    if($num1<>$num2) {
        echo "n1 y n2 no son iguales";
        echo "<br>";
    }

    //Comparacion de dos numeros para ver cual es mayor
    if($num1 > $num2) {
        echo "n1 es mayor que n2";
        echo "<br>";
    } else {
        echo "n2 es mayor que n1";
        echo "<br>";
    }

    //Comparacion de dos numeros para ver si el primero es menor o igual que el segundo
    if($num1<=$num2) {
        echo "n2 es mayor o igual a 1";
        echo "<br>";
    }
    ?>
</body>
</html>