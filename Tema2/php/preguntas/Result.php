<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correcion</title>
</head>
<body>
<?php

include "./respuestas.php";
$cont = 0;
foreach($respuestas as $key => $value){
    if(isset($_REQUEST[str_replace(" ", "_", $key)])){
        $temp = $_REQUEST[str_replace(" ", "_", $key)];
        $temp2 = $respuestas[$key][0];
        if($temp == $temp2){
            echo "<h3>${key}</h3>";
            echo "Has acertado!";
            $cont++;
        }
        else{
            echo "<h3>${key}</h3>";
            echo "Has fallado! La respuesta correcta era: " . $temp2;
        }
    }
}

echo "<b><br><br>Has acertado un total de " . $cont . " de ". count($_POST) . "</b>";

?>
<br><br>
<form action="./Form.php">
    <input type="submit" value="Reintentar cuestionario"/>
</form>

</body>
</html>