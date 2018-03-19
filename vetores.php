<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<div>
			<pre>
				<?php

					$m = array( array(6,4),
						        array(4,9),
						        array(3,2)

					 );
					$m[0][1] = $m[2][0];
					echo "O vetor tem " . count($m) . " elementos</br>";
					//var_dump($m)
					print_r($m);


					/*foreach ($c as $k => $value) {
						echo "O campo $k possui o valor de $value</br>";
					}*/

				?>
			</pre>
		</div>

	</body>

</html>