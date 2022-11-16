<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Práctica 2</h2>
    <h3>Cuantos días faltan para navidad</h3>
    <?php
    $fecha = "25-12-2022";
    $fechahoy =  date("Y-m-d");
    $resta = strtotime($fecha) - strtotime($fechahoy);
    $dias = $resta / (24 * 3600);
    printf("Falta %d para navidad",$dias);
    ?>
</body>

</html>