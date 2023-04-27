<!DOCTYPE html>
<html>
    <head>
        <title>Bonificacion para los vendedores</title>
    </head>
    <body>
        <form method="post" action=""> 
            Cantidad de hijos en edad escolar: <br> <input name="escolares" /><br>
            Ingresar venta total:<br>  <input name="venta_total" /><br>
            Resultado :<br>
            <input type="submit" name="Calcular" value="Calcular">
        </form>
<?php
    $escolares = ($_POST['escolares']);
    $venta_total =  ($_POST['venta_total']);
    $sueldo_basico=600;
    $bonificacion=50*$escolares;
    $comision=$venta_total*0.075;
    $sueldo_bruto=$sueldo_basico+$comision+$bonificacion;
    $descuento=$sueldo_bruto*0.11;
    $sueldo_neto=$sueldo_bruto-$descuento;
    echo 'Bonificacion por hijos: ' . $bonificacion . "<br/>\n";
    echo 'Descuento por comision: ' . $comision . "<br/>\n";
    echo 'Descuento por ley: ' . $descuento . "<br/>\n";
    echo 'Sueldo basico: ' . $sueldo_basico . "<br/>\n";
    echo 'Sueldo bruto: ' . $sueldo_bruto . "<br/>\n";
    echo 'Sueldo neto: ' . $sueldo_neto . "<br/>\n";
?>

    </body>
</html>