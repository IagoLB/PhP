<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //For      

        $num = 5;

        //Escala normal
        for ($i=1;$i <=10;$i++){
            echo $i . "<br>";
        }

        echo "<br>";

        //Escala inversa
        for ($j=10; $j >=1; $j--){
            echo $j . "<br>";
        }
    
        echo "<br>";

        //Mostramos solo pares
        
        for ($k=0; $k <= 100; $k=$k+2){
            echo $k . "<br>";
        }

        echo "<br>";

        //Mostramos solo pares usando if
        
        for ($h=0; $h <= 100; $h++){

            if($h % 2 == 0){
            echo $h . "<br>";
            }
        }

        echo "<br>";

        //Tabla multiplicar

        for ($i=1;$i <=10;$i++){
            echo $num . " x " . $i . " = " . $num*$i . "<br>";
        }

    ?>
</body>
</html>