<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //include
	
	    echo "<p> Soy el primer saludo </p>";
	
	    //Cambiamos el nombre para forzar el warning
	    include "included2.php";

        echo "<p> Soy el saludo de comprobación </p>";
	
	    //include_once "include2.php";

    ?>
</body>
</html>