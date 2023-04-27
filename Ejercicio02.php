<!DOCTYPE html>
<html>
    <head>
        <title>Fabrica de gaseosas</title>
    </head>
    <body>
        <form method="post" action=""> 
            Ingrese precio de la Gaseosa: <br> <input name="precio"/><br>
            Ingresar Cantidad: <br>  <input name="cantidad"/><br>
            Resultado :<br>
            <input type="submit" name="Calcular" value="Calcular">
    </form>
<?php
    $cantidad =$_POST['cantidad'];
    $precio=  $_POST['precio'];
    $descuento_precio = $precio * 0.05;
    $precio=$precio-$descuento_precio ;
    $compra=$precio*$cantidad;
    $descuento=0.07*$compra;
    $apagar=$compra-$descuento;
    $regalo = 2*$cantidad;
    echo 'Precio de la gaseosa: ' . $precio . "<br/>\n";
    echo 'Cantidad: ' . $cantidad . "<br/>\n";
    echo 'Importe: ' . $compra . "<br/>\n";
    echo 'Descuento: ' . $descuento . "<br/>\n";
    echo 'Impuesto : ' . $apagar . "<br/>\n";
    echo 'Regalos: ' . $regalo . "<br/>\n";
?>

    </body>
</html>