<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Definimos una variable
        $numero=22;

        // Creamos la funcion prueba
        function prueba(){
            global $numero;
            echo $numero;

        }
        
        //Invocamos la funcion prueba
        prueba()
    ?>
</body>
</html>