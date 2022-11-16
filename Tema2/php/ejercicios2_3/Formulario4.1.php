<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "./datos_ciudades.php"; ?>
    <form method="POST" action="./Formulario4.2.php" name="Form4">
        <p>
            Pais:
            <select name="pais" id="pais">
                <option value="">Elegir pais</option>
                <?php
                    foreach($pais as $paises => $valor){
                        echo "<option value=\"$paises\">$paises</option>"; 
                    }
                ?>
            </select>
        </p>
        <p>
            <input type="submit">
        </p>

    </form>
</body>
</html>