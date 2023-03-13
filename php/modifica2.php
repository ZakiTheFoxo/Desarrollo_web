<?php 
    include "conex.php";
    $link = Conectarse();
    $id = $_POST['id'];
    $nom=$_POST['nombre'];
    $ap=$_POST['apellidos'];
    $dni=$_POST['dni'];

    echo "
        <html>
            <body bgcolor='lavender'>
                <h1>Registro actualizado</h1>
            </body>
        </html>
        ";

        if(!mysqli_query($link, "update usuario set nombre='$nom', apellidos='$ap',dni='$dni' where Id='$id'")){ 
            echo "Error al actualizar"; 
            exit();
        }

    echo " 
        <center><TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
            <TR>
                <TD>
                    <B>ID</B>
                </TD>
                <TD>
                    <B>Nombre</B>
                </TD>
                <TD>
                    <B>Apellido</B>
                </TD>
                <TD>
                    <B>DNI</B>
                </TD>
            </TR></center>";

    $result=mysqli_query($link,"Select * from usuario where id='$id'");
    $row=mysqli_fetch_array($result);

    printf("<TR><TD>%d</TD><TD>%s</TD><TD>%s</TD><TD>%d</TD></TR></TABLE>",$row["id"],$row["nombre"],$row["apellidos"],$row["dni"]);

    mysqli_free_result($result);
    mysqli_close($link);
?>