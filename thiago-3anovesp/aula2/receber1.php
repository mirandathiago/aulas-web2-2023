<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulários com PHP</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        //var_dump($_POST); 
    ?>

    <h1>Olá <?=$nome?>, você tem <?=$idade?> anos</h1>

    
</body>
</html>