<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

       $numero=30;

       echo "El nombre del servidor es: " . $_SERVER['SERVER_NAME'];
       echo "<br>";
       echo "El software del servidor es: " . $_SERVER['SERVER_SOFTWARE'];
       echo "<br>";
       echo "El puerto del servidor es: " . $_SERVER['SERVER_PORT']; 
       echo "<br>";
       echo "El valor de la variable global es: ". $GLOBALS['numero'];

    ?>
</body>
</html>