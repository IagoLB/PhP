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
    
    echo"Post-incremento";
    echo "<br>";
    //Post-incremento
    echo $num1++;
    echo "<br>";
    echo $num1;
    echo "<br>";

    //Reseteamos el valor

    $num1=5;
    echo"Pre-incremento";
    echo "<br>";
    //Pre-incremento
    echo ++$num1;
    echo "<br>";
    echo $num1;
    echo "<br>";
    
    echo"Pre-decremento";
    echo "<br>";
    //Pre-decremento
    echo $num2;
    echo "<br>";
    echo --$num2;
    echo "<br>";

    //Reseteamos el valor

    $num2=10;
    echo"Post-decremento";
    echo "<br>";
    //Post-decremento
    echo $num2++;
    echo "<br>";
    echo $num2;
    ?>
</body>
</html>