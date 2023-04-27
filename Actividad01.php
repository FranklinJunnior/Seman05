<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01 -Operaciones con PHP</title>
</head>
<body>
        <form method="post" action="">
        Ingresar Valor 1:<br> <input type="text" name="Valor1"><br>
        Ingresar Valor 2:<br> <input type="text" name="Valor2"><br>
        Resultado :<br>
        <input type ="submit" name="Suma" value="Suma">

        </form>

<?php
//declaracion de variables
    $numero1=$_POST["Valor1"];
    $numero2=$_POST["Valor2"];
        $suma=$numero1 + $numero2;
        echo "El resultado de la suma es :  ".$suma;
?>
</body>
</html>   



