<?php include('cabecera.php') ?>
<?php
$dni = $_POST['dni'];
$name = $_POST['name'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fecha'];
$table = 'users';

try{
  $sql = "INSERT INTO `users` (`DNI`, `Nombre`, `Apellido`, `Edad`) VALUES ('$dni', '$name', '$apellidos', '$fecha');";
$link->query($sql);
echo '<h3>La persona ha sido registrada con exito </h3>';
echo '<a href="prueba1.php">Volver</a>';
} catch (PDOException $ex) {
  die("Error PDO al crear el usuario. " . $ex->getMessage());
} catch (Exception $ex) {
  die("Error genérico al crear el usuario. " . $ex->getMessage());
}







/*
try {
  if (empty($_POST['name'])) throw new Exception('No hay nombre');
  $name = $_POST['name'];

  $sql = "INSERT INTO stores (id,name) VALUES(null, '$name')";
  $link->exec($sql);
} catch (PDOException $ex) {
  die("Error PDO al crear la tienda. " . $ex->getMessage());
} catch (Exception $ex) {
  die("Error genérico al crear la tienda. " . $ex->getMessage());
}*/
?>

