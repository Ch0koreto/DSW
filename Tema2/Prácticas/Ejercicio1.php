<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .mayor {
      color: green;
    }

    .menor {
      color: red;
    }
  </style>
</head>

<body>
  <?php
  $num = rand(1, 100);
  if ($num > 50) {
    $style = "mayor";
  } else $style = "menor";
  echo "<h1 class=\"$style\">$num</h1>"
  ?>
</body>

</html>