<?php

if(isset($_REQUEST["prov"])){
        echo "Las provincias seleccionada/s son: ";
        echo "<ul>";
        foreach($_REQUEST["prov"] as $pr){
            echo "<li>" . $pr . "</li>";
        }
        echo "</ul>";
}else{
    echo "No se han seleccionado provincias";
}


