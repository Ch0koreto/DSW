<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 3</title>
</head>
<body>
    <form name="Form3" method="POST" action="./Form3.php">
        <p>
            Provincias:

            <?php
                include "./datos_provincias.php";
                foreach($provincias as $prov){
                    echo "<li><input type=\"checkbox\" name=\"prov[]\" value=\"$prov\"/>" . $prov . " </li>";
                } 
            ?>

        </p>
        <input type="submit"/>

    </form>
</body>
</html>