<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php

    $start = 20;

    do{
        echo $start . " ";
        $start -= 2;
    }while($start >= 0);

?>
</body>
</html>