<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Break

    for($i=0; $i < 10 ; $i++){
        echo "Valor de i: " . $i . "<br>";

        if($i==5){
            break;
        }
    }

    echo "<br>";
    //Doble break
    for($j=0; $j < 2 ; $j++){
        echo "Valor de j: " . $j . "<br>";
        for($k=0; $k <= 3 ; $k++){
            echo "Valor de k: " . $k . "<br>";
            if($k == 3){
                //Con este break salimos de los dos for
                break 2;
            }
        }
    }
    ?>
</body>
</html>