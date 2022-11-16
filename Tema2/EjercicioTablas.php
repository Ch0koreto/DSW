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
    <h1 style="text-align:center;">Ejercicio Tabla PHP</h1>
    <div style="text-align:center;">
        <table style="margin: 0 auto;">
            <thead>
                <tr>
                    <th>head</th>
                    <th>value</th>
                </tr>
            </thead>
            <tbody> <?php
                    include "data_table.php";
                    for ($i = 1; $i <= $rows; $i++) {
                        echo "<tr> ";
                        for ($j = 1; $j <= $comlumns; $j++) {
                            echo "<td>", $j * $i, "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>

</html>