<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Formulario para consulta de datos</title>
	</head>

	<body>
        <form action="consulta1.php" method="post">
            Nombre: <input type="text" name="nombre" size="25" maxlength="20">
            Apellidos: <input type="text" name="apellidos" size="25" maxlength="20">
            DNI: <input type="text" name="dni" size="2" maxlength="3">

            <br><br>

            <input type="radio" name="opcion" value="1" checked>Nombre&nbsp;&nbsp;
            <input type="radio" name="opcion" value="2">Apellido&nbsp;&nbsp;
            <input type="radio" name="opcion" value="3">DNI

            <center><input type="submit" name="action" value="Mostrar"></center>
        </form>

        <?php 
            if($_POST){
                include "conex.php";
                $link = Conectarse();
                $opcion = $_POST['opcion'];
                switch($opcion){
                    case "1":
                        $nombre = $_POST['nombre'];
                        $result = mysqli_query($link, "select * from usuario where nombre = '$nombre'");
                        break;

                    case "2":
                        $apellidos = $_POST['apellidos'];
                        $result = mysqli_query($link, "select * from usuario where apellidos = '$apellidos'");
                        break;

                    case "3":
                        $dni = $_POST['dni'];
                        $result = mysqli_query($link, "select * from usuario where dni = '$dni'");
                        break;
                }
            
        ?>

        <table border="1" cellspacing="1" cellpadding="1">
            <tr>
                <td>ID Usuario</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>DNI</td>
            </tr>
            
            <?php 
                while($row = mysqli_fetch_array($result)){
                    printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%d</td></tr>", $row["id"], $row["nombre"], $row["apellidos"], $row["dni"]);
                }

                mysqli_free_result($result);
                mysqli_close($link);
            ?>
        </table>
        <?php } ?>
    </body>
</html>