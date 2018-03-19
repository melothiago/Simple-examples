<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php

    $i = 1;
    while ($i<=100){
        $name = "num" . $i;
        $url = "f" . $i;
        $$name = isset($_GET[$url])?$_GET[$url]:0;
        if ($$name == 0){
            break;
        }
        echo "Field$i value is " . $$name . "<br/>";
        $i++;
    }

?>
</body>
</html>