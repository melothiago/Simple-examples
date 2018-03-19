<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<div>
			<?php

				include "funcoes.php";
				$x = 3;

				hello();
				sum($x); 
				echo "New value is $x</br>";

			?>
		</div>

	</body>

</html>