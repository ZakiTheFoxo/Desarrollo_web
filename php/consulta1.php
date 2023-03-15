<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../fontawesome/css/all.css">

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

            <center>
                <button type="submit" class="btn btn-primary" name="action" value="Mostrar">
                    <i class="fa fa-search"></i>&nbsp;&nbsp;Mostrar
                </button>
            </center>
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

        <br>

        <div class="table-responsive">
            <table border="1" cellspacing="1" cellpadding="1" class="table table-striped table-hover">
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
            </div>
        <?php } ?>
    </body>
</html>