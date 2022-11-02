<?php
@$link = new mysqli('db', 'root', 'test', 'Usuarios');
$error = $link->connect_errno;
if ($error != null) {
  echo "<p>El error número: $error</p>";
  echo "<p>El error dice: $link->connect_error </p>";
  die(); // Parar la ejecución;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      border-collapse: collapse;
      text-align: center;
    }

    th {
      background-color: navy;
      color: white;
    }

    td, th {
      border: 1px solid navy;
      padding: 2px 8px;
    }

    td:nth-child(5) {
      text-align: right;
    }

    tr:nth-child(even) {
      background-color: aquamarine;
    }

  </style>
</head>

<body><table>
<?php
  $sql = "SELECT * FROM Usuarios";
  $result = $link->query($sql);
  $row = $result->fetch_array();
  while ($row != null) {
?>
      <tr>
        <td><?=$row['ID']?></td>
        <td><?=$row['Nombre']?></td>
        
        <td><?=$row['Fecha']?></td>
        <td><?=$row['Activo']?></td>
      </tr>
<?php
    $row = $result->fetch_array();
  }
  $result->close();


  ?>

</table>

</body>

</html>