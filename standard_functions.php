<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<div>
			<?php

				$p = "Leite";
				$pr = "4.5";

				printf("O %s custa R$ %.2f</br>", $p, $pr);

				$x[0] = 3;
				$x[1] = 7;
				$x[2] = 13;

				//print_r($x);
				//var_dump($x);
				var_export($x);

				$t = "</br>Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da funcao wordwrap";
				$r = wordwrap($t, 20,"</br>\n", false);
				echo "$r";

				$cod = chr(168);
				echo "</br>$cod";

				$l = "C";
				$n = ord($l);
				echo "</br>$n";

			?>
		</div>

	</body>

</html>