<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array Associativo</title>
</head>
<body>
  <?php
     $funcionario = ["nome"    => "João",
                     "idade"   => 45,
                     "salario" => 1600.50,
                     "setor"   => "TI"];

     //var_dump($funcionario);
  ?>

  <p>Nome: <?=$funcionario["nome"]?></p>
  <p>Idade: <?=$funcionario["idade"]?></p>
  <p>Salário:R$<?=$funcionario["salario"]?></p>
  <p>Setor: <?=$funcionario["setor"]?></p>

    
</body>
</html>