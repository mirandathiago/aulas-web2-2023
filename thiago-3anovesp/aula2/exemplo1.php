<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Arrays no PHP</title>
</head>
<body>
   <?php
                 //   0     1  2   3   
      $cachorro = ["Pipoca",2,4.5,true];

      //print_r($cachorro); // Imprime todos os dados de um array exibindo seus índices.
     // echo "<br>";
     // var_dump($cachorro); //Imprime os valores, os índices e os tipos de dados de uma váriavel. 

   ?>

    <h1>O nome do Cachorro é <?=$cachorro[0]?></h1>
    <h2><?="o cachorro tem {$cachorro[1]} anos e pesa {$cachorro[2]}kg"?></h2>
    <p><?=$cachorro[3] ? "Foi vacinado" : "Não foi Vacinado"?></p>


    
</body>
</html>