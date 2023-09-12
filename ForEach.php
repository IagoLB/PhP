<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Foreach

    $datos = ["uno" => 1,"dos" => 2,"tres" =>3];
    
    foreach ($datos as $k => $v){
        echo "Valores [$k] => $v";
        echo "<br>";
    }

    ?>
</body>
</html>