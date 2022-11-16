<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 'hola';
    $hola = 'mundo';
    $adios = 'marte';
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $$a;
    echo "<br>";
    echo $adios;
    $a = 'adios';
    echo "<br>";
    echo $$a;
    echo "<br>";
    $marte = 'funciona';
    echo $ $$a;
    ?>
</body>

</html>