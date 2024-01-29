<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <h2>Detalle de la compra</h2>
    <?php
    
    require 'pedido.php';   
    $referencia = $_POST["select"];


    if (array_key_exists($referencia, $stock)) {
        $producto = array_search($referencia, array_column($productos, 'referencia'));

        echo "<p>Producto seleccionado: $producto</p>";
        echo "<p>Número de unidades disponibles: " . $stock[$referencia]["unidades"] . "</p>";
    } else {
        echo "<p>El producto seleccionado no está disponible en el stock.</p>";
    }
       
    ?>
    <p><a href="pedido.php">Volver al formulario</a></p>
</body>
</html>
