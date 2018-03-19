<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php

    $number = 5;
    echo "Analisando numero $number <br/>";
    for ($div=1; $div <= $number; $div++){

        $rest = $number%$div;

        if($rest==0){
            $mult = " $mult" . " $div";
            $total ++;
        }

    }
    echo "Valores multiplos $mult <br/>";
    echo "Total de multiplos $total <br/>";

    if ($total==2){
        echo "Resultado: $number e primo <br/>";
    }
    else{
        echo "Resultado: $number nao e primo";
    }

?>
</body>
</html>