<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>
<body>

<form method="POST" action="./Form2.php" name="Form2">
    <p>
        <ul>
        Provincias en radio:
            <?php
                include "./datos_provincias.php";
                foreach($provincias as $prov){
                    echo "<li><input type=\"radio\" name=\"prov\" value=\"$prov\">" . $prov . " </li>";
                }                
            ?>
        
        </ul>
        <input type="submit"/>
    </p>

</form>
    
</body>
</html>