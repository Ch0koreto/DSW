<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <?php
        foreach ($_SERVER as $key => $contiene) {
            echo "<tr><td>$key</td> <td>$contiene</td></tr>";
        }
        ?>
    </table>
</body>

</html>