<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio para practicar 2.3</title>
</head>
<body>
    <h1>Lista de frutas</h1>
    <ul>
    <?php
        include "frutas.php";
        sort($frutas);
        foreach($frutas as $valor){
            if(strlen($valor) > 6){
                echo "<li><strong><a href=\" img/" . $valor . ".jpg\">". $valor . "</a></strong></li>";
            }else{
                echo "<li><a href=\" img/" . $valor . ".jpg\">". $valor . "</a></li>";
            }
        }

    ?>

    </ul>
</body>
</html>