<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        //Operadores

        $num1=5;
        $num2=10;

        //Suma

        //Forma 1
        $total= $num1+$num2;
        echo $total;

        echo "<br>";

        //Forma 2
        echo $num1+$num2;

        echo "<br>";

        //Multiplicacion

        echo $num1 . " x " . $num2 . " = " . $num1 * $num2;

        echo "<br>";

        //Resto

        echo $num2 . " / " . $num1 . " = " . $num2 / $num1;

        echo "<br>";

        echo "El resto de " . $num2 . " / " . $num1 . " = " . $num2 % $num1;

        echo "<br>";

        //Exponencial

        echo $num1 . " elevado a " . $num2 . " = " . $num1 ** $num2;

        echo "<br>";
    ?>
</body>
</html>