<?php
include "datos_ciudades.php";
foreach($pais[$_REQUEST["paiselegido"]] as $kp => $vPais){
    echo "<option value=\"$vPais\"> $vPais </option>";
}