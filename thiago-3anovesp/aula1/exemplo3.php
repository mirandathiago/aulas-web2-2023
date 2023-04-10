<?php
    /*
     PHP é uma linguagem de Tipagem fraca e dinâmica, onde não é necessário indicar o tipo da variavel em sua criação, a tipagem será atribuida a partir do valor recebido na sua criação. No PHP uma mesma variavel pode mudar de tipo no tempo de execução do programa bastando um tipo diferente de valor ser atribuido a ela.
     */
    $nome = "Thiago"; //String
    $idade = 38; //Integer
    $altura = 1.80; //Float
    $e_estudante = false; //Boolean (True ou false)

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Variaveis do PHP</title>
    <style>
        body{
            margin:0;
            padding:0;
            background-color:gray;
            height:100vh;
            display:grid;
            place-items: center;            
        }
        .pessoa{
            width:60%;
            height:200px;
            background-color:white;
            border:3px solid black;
            text-align: center;
            border-radius:20px;
        }
    </style>
</head>
<body>
    
    <section class="pessoa">
      <h1><?=$nome?></h1>
      <p><strong>Idade:</strong><?=$idade?> anos</p>
      <p><?="Tem {$altura}m de altura"?></p>
      <p><?=$e_estudante ? "É estudante do IFBA" : "Não é estudante do IFBA" ?></p>
    </section>


</body>
</html>