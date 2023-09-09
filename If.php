<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    

        //If
        $nota1 = 2;
        $nota2 = 8;
        $nota3 = 5;

        if($nota1 >=5){
            echo "nota1 es mayor igual que 5";
            echo "<br>";
        } else {
            echo "nota1 es menor que 5";
            echo "<br>";
        }

        if($nota2 >=5){
            echo "Dentro del primer if";
            echo "<br>";
            if($nota1 < 5){
                echo "Dentro del segundo if";
                echo "<br>";
            }
        }

        if($nota2 >=5 && $nota3 >=5 ){
            echo "Las dos notas son mayores que 4";
            echo "<br>";
        }           
    ?>
</body>
</html>