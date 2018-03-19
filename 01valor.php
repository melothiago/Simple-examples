<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php
    $valor = $_GET["v"];
    echo "O valor enviado foi $valor";
    echo "<br/>A raiz e " . number_format(sqrt($valor),2);
?>
    <a href="01exercicio.html">Voltar</a>
</body>
</html>