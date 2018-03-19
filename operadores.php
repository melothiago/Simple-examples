<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Operacoes</title>
</head>
<body>
<?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "A soma vale ". ($n1 + $n2);
    echo "<br/>A subtracao vale ". ($n1 - $n2);
    echo "<br/>A multiplicacao vale ". ($n1 * $n2);
    echo "<br/>A divisao vale ". ($n1 / $n2);
    echo "<br/>O modulo vale ". ($n1 % $n2);
    echo "<br/>O valor de $n1<sup>$n2</sup> e ". pow($n1, $n2);
    echo "<br/>A raiz de $n1 e ". sqrt($n1);
    echo "<br/>O valor arredondado de $n2 e ". round($n2);
    echo "<br/>A parte inteira de $n2 e ". intval($n2);
    echo "<br/>O valor de $n1 em moeda e $ ". number_format($n1, 2);
?>
</body>
</html>