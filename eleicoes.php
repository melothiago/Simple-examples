<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<div>
			<?php

				$ano = isset($_GET["ano"])?$_GET["ano"]:1900;
				$idade = date("Y") - $ano;

				echo "Quem nasceu em $ano tem $idade anos <br/>";

				if ($idade <16) {
					$tipo = "nao vota";
				}
				elseif (($idade>= 16 && $idade < 18)|| ($idade > 65) ) {
						$tipo = "facultativo";
				}
				else{
						$tipo = "obrigatorio";
				}


				echo "E dessa forma seu voto é $tipo";

			?>
		</div>

	</body>

</html>