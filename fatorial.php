<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php

    $fatorial = 5;
    $total = 1;

    do{
        $total *= $fatorial;
        echo "$total ";
        $fatorial--;

    }while($fatorial > 1);

?>
</body>
</html>