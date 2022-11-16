<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de preguntas</title>
</head>
<body>
    <form action="Result.php" method="POST">

    <?php
        include "./preguntas.php";
        shuffle($preguntas);
        $ran = rand(1, count($preguntas));
        

        for($i = 0; $i < $ran; $i++){
            $temp = $i;
            echo ++$temp . ". ". $preguntas[$i][0] . "<br>";
            echo "<p><ul>";
            shuffle($preguntas[$i][1]);
            for($j = 0; $j < count($preguntas[$i][1]); $j++){
                echo "<li><input type=\"radio\" value=\"". $preguntas[$i][1][$j] ."\" name=\"". $preguntas[$i][0] . "\" required> " . $preguntas[$i][1][$j] ."</li>";
            }
            echo "</ul></p>";
        }
    
    ?>

    <input type="submit"/>
    </form>
</body>
</html>