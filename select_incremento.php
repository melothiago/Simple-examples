<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php

    $start = isset($_GET["start"])?$_GET["start"]:0;
    $end   = isset($_GET["end"])?$_GET["end"]:10;
    $incremento = isset($_GET["inc"])?$_GET["inc"]:1;

    if ($end > $start){

        while ($start <= $end){
            echo $start . " ";
            $start += $incremento;
        }

    }else{

        while ($start >= $end){
            echo $start . " ";
            $start -= $incremento;
        }

    }


?>
</body>
</html>