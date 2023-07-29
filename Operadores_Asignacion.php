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
    $num3=0;
    
    $num3=$num1;
    echo $num3;
       
    echo "<br>";

    //n1 = n1+n2
    echo $num1 . " += " . $num2 . " = " . $num1+=$num2;
    echo "<br>";

    //n1 = n1-n2
    //El valor n1 esta modificado de la operacion anterior y es igual a 15
    echo $num1 . " -= " . $num2 . " = " . $num1-=$num2;
    echo "<br>";

    //n1 = n1*n2
    //El valor n1 volvio a su valor anterior al restarle 10 y quedo a 5 otra vez
    echo $num1 . " *= " . $num2 . " = " . $num1*=$num2;
    echo "<br>";
    ?>
</body>
</html>