<?php
@$link = new mysqli('db', 'root', 'test', 'world');
$error = $link->connect_errno;
if ($error != null) {
  echo "<p>El error número: $error </p>";
  echo "<p>El error dice: $link->connect_error </p>";
  die(); //Parar ejecución
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cities</title>
  <style>
  </style>
</head>

<body>
  <h1>Country of the World</h1>
  <form action="./country_copy.php" method="POST">
    <p><select id="Continent" name="continente">
    <option>--- Choose a continent ---</option>
        <?php
        $sql = "SELECT DISTINCT Continent FROM country";
        $result = $link->query($sql);
        $row = $result->fetch_array();
        while ($row != null) {
        ?>
          <option><?= $row['Continent'] ?></option>
        <?php
          $row = $result->fetch_array();
        }
        ?>
        <input type="submit" name="submit"/>
      </select>
  </form>
  </p>
  <select>
    <?php if (isset($_POST['continente'])) {
      $selected = $_POST['continente'];
      $sql = "SELECT * FROM country WHERE Continent = '$selected'";
      $result = $link->query($sql);
      $row = $result->fetch_array();
      while ($row != null) {
    ?>
        <option><?= $row['Name'] ?></option>
    <?php $row = $result->fetch_array();
      }
    } ?>
  </select>
</body>

</html>
<?php
$link->close();
?>