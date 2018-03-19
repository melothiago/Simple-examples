<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php
    $a = 3;
    $b = &$a;
    $a += 1;
    echo "A variavel A vale $a";
    echo "<br/>A variavel B vale $b";

?>
</body>
</html>