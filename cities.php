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
    table {
      border-collapse: collapse;
      text-align: center;
    }

    th {
      background-color: navy;
      color: white;
    }

    if td,
    th {
      border: 1px solid black;
      padding: 2px 8px;
    }

    td:nth-child(5) {
      text-align: end;
    }

    tr:nth-child(even) {
      background-color: turquoise;
    }
  </style>
</head>

<body>
  <h1>Cities of the World</h1>
  <table>
    <thead>
      <tr></tr>
      <th>id</th>
      <th>Name</th>
      <th>Country</th>
      <th>District</th>
      <th>Population</th>
    </thead>
    <?php
    $limit = "";
    if (isset($_GET['n'])) {
      $limit = " LIMIT " . $_GET['n'];
    }

    $sql = "SELECT * FROM city" . $limit;
    echo ($sql);
    $result = $link->query($sql);
    $country = $result->fetch_array();
    while ($country != null) {
    ?>
      <tbody>
        <tr></tr>
        <td><?= $country['ID'] ?></td>
        <td><?= $country['Name'] ?></td>
        <td><a href="country.php/?code=<?= $country['CountryCode'] ?>"><?= $country['CountryCode'] ?></a></td>
        <td><?= $country['District'] ?></td>
        <td><?= $country['Population'] ?></td>
      </tbody>
    <?php
      $country = $result->fetch_array();
    }
    ?>
  </table>
</body>

</html>
<?php
$link->close();
?>