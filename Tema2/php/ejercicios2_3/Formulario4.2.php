<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        
        
        <?php
            echo "Las ciudades de " .$_REQUEST["pais"] . " son: ";
            echo "<ul>";
            include "./datos_ciudades.php";
            foreach($pais[$_REQUEST["pais"]] as $ciudad){
                echo "<li> $ciudad </li>";
            }
        ?> 
        </ul>
    </p>
</body>
</html>