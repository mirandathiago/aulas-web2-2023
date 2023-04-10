<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        $soma = $num1 + $num2;
    ?>

    <h1><?="A soma do {$num1} + {$num2} é igual a {$soma}"?></h1>
    
</body>
</html>