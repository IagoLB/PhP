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


        //array_pop — Extrae el último elemento del final del array

        $ultimo= array_pop($nombres);

        echo "El array \$nombres eliminando el ultimo elemento";
        var_dump($nombres);
        echo "<br>";

        echo "El elemento extraido de \$nombres";
        var_dump($ultimo);
        echo "<br>";

        //array_push — Inserta uno o más elementos al final de un array

        array_push($nombres, "Furina","Ningguang");
        echo "El array \$nombres añadiendo elementos al final";
        var_dump($nombres);
        echo "<br>";
        
    ?>
</body>
</html>