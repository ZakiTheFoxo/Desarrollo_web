<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Uso de lista desplegable</title>
	</head>

	<body>
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
    </body>
</html>