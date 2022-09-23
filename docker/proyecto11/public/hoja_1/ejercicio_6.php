<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>

<body>
    <h3>Resolucion del ejercicio 6 de la hoja 1</h3>

    <?php
    $cantidad = 2345.67;

    $cantidadParcial = $cantidad; //variable auxiliar

    $b500 = (int) ($cantidadParcial / 500);
    $cantidadParcial = $cantidadParcial - $b500 * 500;

    $b200 = (int) ($cantidadParcial / 200);
    $cantidadParcial = $cantidadParcial - $b200 * 200;

    $b100 = (int) ($cantidadParcial / 100);
    $cantidadParcial = $cantidadParcial - $b100 * 100;

    $b050 = (int) ($cantidadParcial / 50);
    $cantidadParcial = $cantidadParcial - $b50 * 50;

    $b020 = (int) ($cantidadParcial / 20);
    $cantidadParcial = $cantidadParcial - $b20 * 20;

    $b010 = (int) ($cantidadParcial / 10);
    $cantidadParcial = $cantidadParcial - $b010 * 10;

    $b005 = (int) ($cantidadParcial / 5);
    $cantidadParcial = $cantidadParcial - $b005 * 5;

    $m100 = (int) ($cantidadParcial / 1);
    $cantidadParcial = $cantidadParcial - $m100 * 1;

    $m050 = (int) ($cantidadParcial / 0.5);
    $cantidadParcial = $cantidadParcial - $m050 * .5;

    $m020 = (int) ($cantidadParcial / 0.2);
    $cantidadParcial = $cantidadParcial - $m020 * .2;

    $m010 = (int) ($cantidadParcial / 0.1);
    $cantidadParcial = $cantidadParcial - $m010 * .1;

    $m005 = (int) ($cantidadParcial / 0.05);
    $cantidadParcial = $cantidadParcial - $m005 * .05;

    $m002 = (int) ($cantidadParcial / 0.02);
    $cantidadParcial = $cantidadParcial - $m002 * .02;

    $m001 = (int) ($cantidadParcial / 0.01);
    $cantidadParcial = $cantidadParcial - $m001 * .01;


    echo 'Para devolver ' . $cantidad . ' euros necesitamos:<br>';
    echo $b500 . 'billetes de 500 euros<br>';
    echo $b200 . 'billetes de 200 euros<br>';
    echo $b100 . 'billetes de 100 euros<br>';
    echo $b050 . 'billetes de 50 euros<br>';
    echo $b020 . 'billetes de 20 euros<br>';
    echo $b010 . 'billetes de 10 euros<br>';
    echo $b005 . 'billetes de 5 euros<br>';
    echo $m100 . 'monedas de 1 euro<br>';
    echo $m050 . 'monedas de 50 centimos<br>';
    echo $m020 . 'monedas de 20 centimos<br>';
    echo $m010 . 'monedas de 10 centimos<br>';
    echo $m005 . 'monedas de 5 centimos<br>';
    echo $m001 . 'monedas de 1 centimo<br>';
    ?>

    <br><br>
    <a href="../daw20-09/docker/proyecto11/public/index.html">Volver</a>

</body>

</html>