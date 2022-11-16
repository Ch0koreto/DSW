<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 4</title>
    <!--Incluir la librería jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 
 <!--Llamada al evento Change del selector Países-->
<script language="javascript">
 $(document).ready(function(){
     $("#pais").on('change', function () {
         $("#pais option:selected").each(function () {
             paiselegido=$(this).val();
             $.post("php2.php", { paiselegido: paiselegido }, function(data){
                 $("#ciudad").html(data);
             });         
         });
    });
 });
 </script>
</head>
<body>
    <?php include "./datos_ciudades.php";
                      
    ?>
    <form method="POST" action="./Form4.php" name="Form4">
        <p>
            Pais:
            <select name="pais" id="pais">
                <option value="">Elegir pais</option>
                <?php
                    foreach($pais as $paises => $valor){
                        echo "<option value=\"$paises\">$paises</option>"; 
                    }
                ?>
            </select>
        </p>
        <p>
            Ciudad:
            <select name="ciudad" id="ciudad">
                <option value ""> Elegir ciudad </option>
                
            </select> 
               
        </p>
        <p>
            <input type="submit">
        </p>

    </form>


</body>
</html>