<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Goto

    $opcion = 2;

    switch ($opcion) {
        case 1:
            echo "Seleccionaste la opción 1 <br>";
            break;
        case 2:
            echo "Seleccionaste la opción 2 <br>";
            break;
        case 3:
            echo "Seleccionaste la opción 3 <br>";
            break;
        default:
            echo "Opción no válida";
            goto fin;
    }

fin:
echo "Fin del programa";

?>
</body>
</html>