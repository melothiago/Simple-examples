<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 and $n2";
    $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
    echo "O total e $r";
?>
</body>
</html>