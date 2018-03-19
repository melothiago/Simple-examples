<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<div>
			<?php

				function soma(){

					$p = func_get_args();
					$t = func_num_args();
					$s = 0;

					for ($i=0; $i<$t; $i++){ 

						$s += $p[$i];
					}

					return $s;

				}

				$r = soma(2,3,5,20);
				echo "O total e $r";

			?>
		</div>

	</body>

</html>