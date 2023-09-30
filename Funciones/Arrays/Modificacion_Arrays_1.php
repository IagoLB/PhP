<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Funciones de arrays

        $nombres=["Xiao","Ganyu","Ayaka","Orihime"];
        echo "El array \$nombres sin modificar";
        var_dump($nombres);
        echo "<p> </p>";
        echo "<br>";

        //array_shift — Quita un elemento del principio del array
        $eliminado=array_shift($nombres);
        echo "El array \$nombres eliminando el 1º elemento";
        var_dump($nombres);
        echo "<p> </p>";
        echo "<br>";

        //Se ha guardado el elemento eliminado en la variable $eliminado
        echo "El elemento eliminado de \$nombres";
        var_dump($eliminado);
        echo "<p> </p>";
        echo "<br>";

        //array_unshift — Añadir al inicio de un array uno a más elementos
        array_unshift($nombres, "Zhongli");
        echo "El array \$nombres con el añadido de Zhongli";
        var_dump($nombres);
        echo "<p> </p>";
        echo "<br>";
        
    ?>
</body>
</html>