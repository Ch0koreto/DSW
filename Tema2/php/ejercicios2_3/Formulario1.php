<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form name="form1" action="./Form1.php" method="POST">
    <p>Provincia: 

        <input  list="allProv" name="prov" id="prov">

        <datalist id="allProv">
        <?php
        include "./datos_provincias.php";
            foreach($provincias as $prov){
                echo "<option value=\"${prov}\">";
            }
        ?>
        </datalist>
        <input type="submit"/>

    </p>
    </form>
</body>
</html>