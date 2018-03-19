<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php

    $x = 0;
    $y = 1;

    for($i=0;$i<=10;$i++){

        $z = $x + $y;
        echo $z."<br />";
        $x=$y;
        $y=$z;
    }

?>
</body>
</html>