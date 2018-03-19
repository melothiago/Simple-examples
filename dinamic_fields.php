<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<h1>Testando PHP</h1>

    <form method="get" action="dinamic_fields.php">
        Field numbers: <input type="number" name="fields_qtd" min="1" max="10" value="1">
        <input type="submit" value="Open fields">
    </form>

    <?php
    $fields = isset($_GET["fields_qtd"])?$_GET["fields_qtd"]:0;
    $i = 1;
    while ($i<=$fields){

        echo"<form method='get' action='dinamic.php'>";

        echo "Field$i: <input type='number' name='f$i' min='0' max='100' value='0'/><br/>";
        $i++;
    }

    echo"<input type='submit' value='Send'/>";
    echo"</form>";

    ?>

</body>
</html>