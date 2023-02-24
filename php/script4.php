<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Ejemplo PHP embebido</title>
	</head>

	<body>
		<?php // script4.php
			$a = 8;
			$b = 3;

			echo "Resultado de $a == $b: ", $a == $b, "<br>";
			echo "Resultado de $a != $b: ", $a != $b, "<br>";

			echo "Resultado de $a < $b: ", $a < $b, "<br>";
			echo "Resultado de $a > $b: ", $a > $b, "<br>";

			echo "Resultado de $a <= $b: ", $a <= $b, "<br>";
			echo "Resultado de $a >= $b: ", $a >= $b, "<br>";
		?>
	</body>
</html>