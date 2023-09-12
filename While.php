<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //While

    $num = 10;
    $respuesta = "Madrid";
    $intentos = 1;

    while ($num >=0){
        echo $num . "<br>";
        $num--;
    };

    echo "<br>";

    while ($respuesta != "Paris"){
        echo "Intentos: " . $intentos . "<br>";
        
            if($intentos ==3){
                $respuesta = "Paris";
            }
        $intentos++;
    }

    ?>
</body>
</html>