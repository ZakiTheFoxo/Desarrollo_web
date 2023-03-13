<?php 
    include "conex.php";
    $link = COnectarse();
    if($link){
        echo "Conexion con la base de datos conseguida <br>";
        mysqli_close($link);
    }
?>