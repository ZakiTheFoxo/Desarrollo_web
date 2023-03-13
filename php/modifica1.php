<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Uso de lista desplegable</title>
	</head>

	<body bgcolor='lavender'>
        <h1>Que registro desea modificar: </h1>
        <form method="POST" action="modifica1.php">
            <table>
                <tr>
                    <td>
                        ID: <select name="id">

                        <?php 
                            include "conex.php";
                            $link = Conectarse();
                            $result = mysqli_query($link, "SELECT id FROM usuario") or die(mysqli_error($link));
                            while($row = mysqli_fetch_array($result)){
                                echo '<option>'.$row['id'];
                            }
                        ?>

                        </select>
                        <center><input type="submit" name="action" value="Mostrar"></center>
                    </td>
                </tr>
            </table>
        </form>

        <hr size="3" color="white">
        <h2>Introduzca los datos que se van a modificar</h2>

        <form action='modifica2.php' method='POST'>
            <?php 
                if(!isset($_POST['id']))
                    $var = 1;
                else
                    $var = $_POST['id'];
                
                $result = mysqli_query($link, "SELECT * FROM usuario WHERE id = '$var'");
                $row = mysqli_fetch_array($result);

                echo "
                    Nombre:
                    <input type='text' name='nombre' value='$row[1]'><br>
                    Apellidos:
                    <input type='text' name='apellidos' value='$row[2]'><br>
                    DNI:
                    <input type='text' name='dni' value='$row[3]'><br>
                    <input type='hidden' name='id' value='$row[0]'><br>
                ";
            ?>
            <center><input type='submit' name='Accion' value='Modificar'></center>
        </form>
    </body>
</html>