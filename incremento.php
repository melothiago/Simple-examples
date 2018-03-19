<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php
    $atual = $_GET["aa"];
    echo "O ano atual e $atual e o ano anterior e " . --$atual;
?>
</body>
</html>