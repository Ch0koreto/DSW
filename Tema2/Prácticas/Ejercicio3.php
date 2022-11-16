<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Ejercicio 3</h1>
  <?php
  include "frutas.php";
  sort($frutas);
  foreach ($frutas as $fruta) {
    if (strlen($fruta) > 6) echo "<li><b><a href=\"img.php?fruta=${fruta}\">$fruta</a></b></li>";
    else echo "<li><a href=\"img.php?fruta=${fruta}\">$fruta</a></li>";
  }
  ?>
</body>

</html>