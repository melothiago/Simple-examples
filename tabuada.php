<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php

    $number = 6;
    $mult = 0;

    do{
        $value = $number * $mult;
        echo "$number X $mult = " . $value . "<br/>";
        $mult++;
    }while($mult <= 10);

?>
</body>
</html>