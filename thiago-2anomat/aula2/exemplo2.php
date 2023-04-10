<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $cachorro = ["nome"=>"Rex",
                 "idade" => 2,
                 "raca" => "Vira-Lata",
                 "peso" => 8.5,
                 "vacinado" => true];

    //var_dump($cachorro);             
    ?>

    <h1>Olá <?=$cachorro["nome"]?></h1>
    <h3>Tem <?=$cachorro["idade"]?> anos </h3>
    <h3>É da raça <?=$cachorro["raca"]?></h3>
    <h3>O peso dele é de <?=$cachorro["peso"]?>kg</h3>
    <h3> <?=$cachorro["vacinado"] ? "Tomou a Vacina" : "Não tomou a vacina"  ?> </h3>



</body>
</html>