<?php include('cabecera.php') ?>
<?php 
echo '<table>';
$table = '$users';
$sql = "SELECT * FROM $table";
$result = $link->query($sql);
$row = $result->fetch_assoc();
while($row != null){
?>
<tr>
  <td><?=$row['DNI']?></td>
  <td><?=$row['Name']?></td>
  <td><?=$row['Apellidos']?></td>
  <td><?=$row['Edad']?></td>
</tr>
<?php 
$row = $result->fetch_assoc();
}
echo '</table>';
$result -> close();
?>
