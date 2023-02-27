<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Suma (Ingresar Variables)</title>

        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
        <script>
        	function validarDatos(){
                if(document.formulario.var_1.value == ""){
					alert("Tiene que introducir un número en la variable 1")
					document.formulario.var_1.focus()
					return 0;
				}

                if(document.formulario.var_2.value == ""){
					alert("Tiene que introducir un número en la variable 2")
					document.formulario.var_2.focus()
					return 0;
				}else if(document.formulario.var_2.value == 0 && document.formulario.operation.value == "dividir"){
					alert("El número no puede ser 0 cuando se usa división")
					document.formulario.var_2.focus()
					return 0;
				}

                if(document.formulario.operation.value == ""){
                    alert("Tiene que elegir una operación")
                    return 0;
                }

                document.formulario.submit();
            }
        </script>
	</head>

	<body>
        <form method="GET" action="funcion2.php" name="formulario">
            <table align="center" width="50%" cellpadding="10%">
                <tr>
                    <td align="center">
                        Variable 1: <input type="number" name="var_1" style="width: 3em">
                    </td>
                    <td align="center">
                        Variable 2: <input type="number" name="var_2" style="width: 3em">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <table width="100%" height="100%">
                            <tr>
                                <td align="center">
                                    <input type="radio" name="operation" value="suma">Suma
                                </td>
                                <td align="center">
                                    <input type="radio" name="operation" value="resta">Resta
                                </td>
                                <td align="center">
                                    <input type="radio" name="operation" value="multiplicar">Multiplicar
                                </td>
                                <td align="center">
                                    <input type="radio" name="operation" value="dividir">Dividir
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" value="Realizar Operación" onclick="validarDatos()">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>