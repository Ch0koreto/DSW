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
  <h1>Country of the World</h1>
  <table>
    <thead>
      <tr></tr>
      <th>CODE</th>
      <th>Name</th>
      <th>Continent</th>
    </thead>
    <?php
    $where = "";
    if (isset($_GET['code'])) {
      $where = " WHERE Code = '". $_GET['code']."'" ;
    }
    $sql = "SELECT * FROM country" . $where;
    echo ($sql);
    $result = $link->query($sql);
    $row = $result->fetch_array();
    while ($row != null) {
    ?>
      <tbody>
        <tr></tr>
        <td><?= $row['Code'] ?></td>
        <td><?= $row['Name'] ?></td>
        <td><?= $row['Continent'] ?></td>
      </tbody>
    <?php
      $row = $result->fetch_array();
    }
    ?>
  </table>
</body>

</html>
<?php
$link->close();
?>