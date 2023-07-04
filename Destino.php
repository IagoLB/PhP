<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Recogemos la variable nombre y la llamamos
    echo "Nombre: ". $_GET['nombre'];

    echo "<br>";
    
    //Recogemos la variable cargo y la invocamos
    echo "cargo: ". $_GET['cargo'];
    ?>
</body>
</html>