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
    $vat = true;
    $price = 10;
    priceWithVat();     // esta línea dará error, coméntala
    if ($vat) {
        function priceWithVat()
        {
            global $price; // podemos usar también $price = $GLOBALS["price"];
            $priceWithVat = $price * 1.07;
            echo "El precio con IGIC es $priceWithVat";
        }
    }
    priceWithVat();     // Aquí ya no da error

    ?>
    <?php
    $vat = true;
    $price = 10;
    if ($vat) {
        priceWithVat(); // Podemos hacer uso de la función antes de implementarla.
    }
    function priceWithVat()
    {
        $price = $GLOBALS["price"];
        $priceWithVat = $price * 1.07;
        echo "El precio con IGIC es $priceWithVat";
    } ?>
</body>

</html>