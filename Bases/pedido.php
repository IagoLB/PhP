<!DOCTYPE html>
        <?php
        $productos = array(	
	
            'Bolígrafo Azul' => array(
                    'marca' => "Bic",
                    'precio'  => "0.75€",
                    'referencia'  => "552BIC12"
            ),

            'Pegamento' => array(
                    'marca' => "Pritt",
                    'precio'  => "1.75€",
                    'referencia'  => "567PRI13"
            ),
            
            'Libreta' => array(
                    'marca' => "Enri",
                    'precio'  => "2.75€",
                    'referencia'  => "540ENR03"
            )
        );
        
        
        $stock = array(	
	
            '552BIC12' => array("unidades" => 10),

            '567PRI13' => array("unidades" => 7),
            
            '540ENR03' => array("unidades" => 20)
        );
        ?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <form method="post" action="respuesta.php">
            <p>Productos:</p>
            <select name="select" id="select">
               <?php echo llenarSelect($productos) ?>
            </select>
            <p><input type="submit" value="comprar">
            <input type="reset" value="borrar"></p>
        </form>
        <?php
        $sum = 0;
        

       function llenarSelect($productos){
            foreach ($productos as $nombre => $valor){
              $html.= "<option value=".$valor['referencia'].">".$nombre."</option>";
            }
            return $html;
        }
        
        ?>

    </body>
</html>