<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"] ?? "Sem Nome";
        $idade = $_GET["idade"] ?? 0;

        
       //var_dump($_GET);

    ?>

    <h1>Olá <?=$nome?>, sua idade é <?=$idade?> anos</h1>
    
</body>
</html>