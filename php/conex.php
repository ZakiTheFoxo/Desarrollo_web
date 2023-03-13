<?php 
    function Conectarse(){
        if(!$link = mysqli_connect("localhost", "zaki", "mysql", "omar")){
            die('Error Conectando: '.mysqli_connect_error());
            exit();
        }
        return $link;
    }
?>