<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular</title>
</head>
<body>
    <?php
        $n1 = $_POST["num1"] ?? 0;
        $n2 = $_POST["num2"] ?? 0;

        $soma = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;

    ?>

    <h1>Operações matemáticas com <?=$n1?> e <?=$n2?></h1>
    
</body>
</html>