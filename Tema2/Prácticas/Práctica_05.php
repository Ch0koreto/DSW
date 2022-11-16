<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }
        th,
        td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

    <table>
        <?php
        echo "<h1>La tabla del numero: " .  $_GET["number"];
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>" . $_GET["number"]  . "*" . $i . "</td><td>" . $_GET["number"] * $i . "</td></tr>";
        }


        ?>

    </table>
</body>

</html>