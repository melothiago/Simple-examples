<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $media = ($n1 + $n2)/2;
    echo "A media e $media";
    echo "<br/>O aluno foi $situacao " . (($media>=7)?"Aprovado":"Reprovado");
?>
</body>
</html>