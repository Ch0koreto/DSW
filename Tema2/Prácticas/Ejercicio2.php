<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Práctica 2</h1>
  <h2>Cuantos días faltan para navidad</h2>
  <?php 
  $fechaNavidad= "2022-12-25";
  $fechaHoy= date("y-m-d");
  $dias = strtotime($fechaNavidad) - strtotime($fechaHoy);
  $dias = $dias/ (24*3600);
  printf("Faltan %d para navidad",$dias);
  ?>
</body>
</html>