<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays Associativos</title>
</head>
<body>
    <?php
        
        $fun = ["nome"    => "João",
                "idade"   => 45,
                "salario" => 4500.89,
                "setor"   => "TI"               
            ];

       

        var_dump($fun);
    ?>

    <p>Nome: <?=$fun["nome"]?></p>
    <p>Idade: <?=$fun["idade"]?></p>
    <p>Salário: <?=$fun["salario"]?></p>
    <p>Setor: <?=$fun["setor"]?></p>



</body>
</html>