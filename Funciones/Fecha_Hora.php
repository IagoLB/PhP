<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Funciones de fecha y/o hora

        //Jugando con fechas
        //date — Dar formato a la fecha/hora local

        echo "Este es el año". "<br>";
        echo date("Y") . "<br>" . "<br>";;

        echo "Esta es la fecha". "<br>";
        echo date("d m y") . "<br>" . "<br>";

        echo "Esta es la fecha con separadores". "<br>";
        echo date("d/m/y") . "<br>" . "<br>";

        echo "Este es el año seguido de la hora en formato 24 horas". "<br>";
        echo date("Y G:i:s A") . "<br>" . "<br>";

        echo "Este es el año seguido de la hora en formato 12 horas". "<br>";
        echo date("d|m|y g:i:s") . "<br>" . "<br>";


        //Zonas horarias
        //date_default_timezone_set — Establece la zona horaria predeterminada usada por todas las funciones de fecha/hora en un script

        echo "Zona horaria: " . date_default_timezone_get() . "<br>";

        date_default_timezone_set("Europe/Paris");

        echo "Zona horaria: " . date_default_timezone_get() . "<br>";

        //Listado completo de fecha/hora
        //getdate — Obtener información de la fecha/hora(Es un array)

        $fecha=getdate();

        var_dump($fecha);

        if($fecha["mday"]== 7){
            echo "Estamos a dia 6";
        } else {
            echo "No estamos a dia 6";
        }
    
    ?>
</body>
</html>