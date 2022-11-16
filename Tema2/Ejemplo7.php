<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Actividad fecha y hora </h1>
    <ol>
        <li>Fecha y hora actuales</li>
        <br>
        <?php
        $Object = new DateTime();
        $DateAndTime = $Object->format(" h:i:s a");
        echo "La hora actual es: $DateAndTime.";
        ?>
        <li>Fecha y hora dentro de una semana, sumándole de forma manual al timestamp los segundos necesarios</li>
        <?php
        echo strftime("%A");
        setlocale(LC_TIME, "es_ES.UTF-8");
        echo strftime(" en español es %A.");
        ?>
        <li>Fecha y hora dentro de una semana, haciendo uso de la función strtotime().</li>
        <li> Fecha y hora dentro de 1 mes, 3 horas y 15 minutos, haciendo uso de la función strtotime().</li>

        <?php

        ?>
</body>

</html>