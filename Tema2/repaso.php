<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    /*Ejercicio 1: Calcular suma números aleatorias
    Crea una página que muestre dos números enteros aleatorios entre el
    1 y el 100 y una entrada para que el usuario introduzca la suma de esos
    dos números. Cuando el usuario pulsa el botón comprobar, se debe ir a la
    misma página y mostrar si la solución es correcta o no (en este caso
    mostrar la correcta).*/
    <?php
    $x = rand(1, 100);
    $y = rand(1, 100);
    echo "Calcula la suma de $x e $y";
    
    ?>

</body>

</html>