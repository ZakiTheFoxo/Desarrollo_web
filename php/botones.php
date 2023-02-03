<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=UTF-8')
?>
<html>
	<head>
		<meta charset="UTF=8">
		<title>Tabla botones</title>
	</head>

	<body>
		<FORM method="GET">
			<table border='1' width="50%" align="center" valign="middle">
				<tr>
					<th colspan="3">Formulario de ingreso</th>
				</tr>

				<tr>
					<td width="50%">Nombre:</td>
					<td colspan="2">
						<INPUT TYPE="Text" PLACEHOLDER="Nombre" SIZE="100%" MAXLENGTH="10" NAME="campo_nombre">
					</td>
				</tr>

				<tr>
					<td width="50%">Contraseña:</td>
					<td colspan="2">
						<INPUT TYPE="PASSWORD" PLACEHOLDER="Contraseña" SIZE="100%" MAXLENGTH="10" NAME="campo_password">
					</td>
				</tr>

				<tr>
					<td colspan="3">Semestre:</td>
				</tr>

				<tr>
					<td colspan="3">
						<table width="90%">
							<tr>
								<td align="center">
									<INPUT TYPE="RADIO" NAME="semestre_radio" VALUE="1" CHECKED>1
								</td>
								<td align="center">
									<INPUT TYPE="RADIO" NAME="semestre_radio" VALUE="2">2
								</td>
								<td align="center">
									<INPUT TYPE="RADIO" NAME="semestre_radio" VALUE="3">3
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr>
					<td colspan="3">Deporte:</td>
				</tr>

				<tr>
					<td colspan="3">
						<table width="100%">
							<tr>
								<td align="center">
									<INPUT TYPE="CHECKBOX" NAME="box_check" VALUE="Box">Box
								</td>

								<td align="center">
									<INPUT TYPE="CHECKBOX" NAME="natacion_check" VALUE="Natacion">Natación
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr>
					<td colspan="3">
						<table width="90%">
							<tr>
								<td align="center">
									<INPUT TYPE="RESET" NAME="Reset" VALUE="Limpiar">
								</td>

								<td align="center">
									<INPUT TYPE="SUBMIT" NAME="Enviar" VALUE="Enviar">
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</FORM>
	</body>
</html>