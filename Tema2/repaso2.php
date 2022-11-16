<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <label for="$date1">Fecha 1: </label>
    <br>
    <label for="$date2">Fecha 2:</label>
    <?php
    $difference = $date1->diff($date2);
    echo $difference->format('%R%a days');
    ?>
</body>
</html>