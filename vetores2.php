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

					$v = array( "A", "J", "M", "X", "K");
					print_r($v);
					array_push($v, "O");
					print_r($v);
					array_pop($v);
					print_r($v);
					array_unshift($v, "Z");
					print_r($v);
					array_shift($v);
					print_r($v);
					sort($v);
					print_r($v);
					rsort($v);
					print_r($v);
					asort($v);
					print_r($v);
					ksort($v);
					print_r($v);
					krsort($v);
					print_r($v);
					arsort($v);
					print_r($v);

				?>
			</pre>
		</div>

	</body>

</html>