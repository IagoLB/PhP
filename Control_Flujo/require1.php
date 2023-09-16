<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //require
	
	    echo "<p> Soy el primer saludo </p>";
	
	    //Cambiamos el nombre para forzar el crasheo
	    require "required2.php";

        echo "<p> Soy el saludo de comprobación </p>";
	
	    //require_once "require2.php";

    ?>
</body>
</html>