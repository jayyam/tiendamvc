<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja 2 ejercicio 3</title>
</head>

<body>
    <h3>Resolucion del ejercicio 3 de la hoja 2</h3>

    <?php

    $a = -1;
    $b = 2;
    $c = -1;

    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante > 0) {
        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
    } elseif ($discriminante == 0) {
        $solucion1 = -$b / (2 * $a);

        echo 'x = ' . $solucion1 . '<br>';
    } else {
        $solucionReal = -$b / (2 * $a);
        $solucionImaginaria = sqrt(-$discriminante / 2 * $a);

        echo 'x1 = ' . $solucionReal . ' + ' . round(abs($solucionImaginaria, 2)) . 'i<br>';
        echo 'x1 = ' . $solucionReal . ' - ' . round(abs($solucionImaginaria, 2)) . 'i';
    }
    ?>

    <br><br>
    <a href="/home/daw20-09/docker/proyecto11/index.html">Volver al indice</a>
</body>

</html>