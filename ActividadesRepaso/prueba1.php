<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css" >
</head>

<body>
  <h2>Formulario</h2>
  <form action="registrar.php" method="post" >
  <p>DNI: <input type="text" name="dni" required></p>
  <p>Nombre: <input type="text" name="name" required></p>
  <p>Apellidos: <input type="text" name="apellidos" required></p>
  <p>Fecha de nacimiento: <input type="text" name="fecha" required></p>
  <button type="submit" >Send</button>
  </form>
  
  <a href="mostrar.php">Mostrar personas</a>
</body>

</html>