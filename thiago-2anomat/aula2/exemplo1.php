<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $cachorro = ["Rex",2,"Vira-Lata",8.5,true];
    ?>

    <h1>Olá <?=$cachorro[0]?></h1>
    <h3>Tem <?=$cachorro[1]?> anos </h3>
    <h3>É da raça <?=$cachorro[2]?></h3>
    <h3>O peso dele é de <?=$cachorro[3]?>kg</h3>
    <h3> <?=$cachorro[4] ? "Tomou a Vacina" : "Não tomou a vacina"  ?> </h3>



</body>
</html>