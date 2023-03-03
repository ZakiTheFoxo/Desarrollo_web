<?php // script14a.php
    header('Content-Type: text/html; charset=UTF-8');

	$var_1 = $_GET['var_1'];
	$var_2 = $_GET['var_2'];
    $op = $_GET['operation'];

    echo "<table align='center' cellpadding='10%' width='30%'><tr><td align='center'>";

	switch($op){
        case 'suma':
            echo "La suma de $var_1 + $var_2 es: ", $var_1 + $var_2, "<br>";
            break;

        case 'resta':
            echo "La resta de $var_1 - $var_2 es: ", $var_1 - $var_2, "<br>";
            break;

        case 'multiplicar':
            echo "La multiplicación de $var_1 * $var_2 es: ", $var_1 * $var_2, "<br>";
            break;

        case 'dividir':
            if($var_2 != 0){
                echo "La división de $var_1 / $var_2 es: ", $var_1 / $var_2, "<br>";
            }else{
                echo "La división de $var_1 / $var_2 no está definida<br>";
            }
            break;
        
        default:
            echo "Opcion $op no encontrada<br>";
            break;
    }

    echo "</td></tr><tr><td align='center'>";

    echo '<input type = "button" value = "Regresar" onclick="history.go(-1)"></td></tr></table>';
?>