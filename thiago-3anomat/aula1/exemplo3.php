<?php
    /*
        Php é uma linguagem com a tipagem fraca e dinâmica. Não é necessário indicar o tipo de dado ao criar uma variável. O Php entende o tipo do dado a partir do momento em que o valor é atribuido a variavel. 
        Uma mesma variavel pode no tempo execução mudar o seu tipo de dado de acordo com seu valor atribuido. 

    */
    $nome = "Thiago"; //String
    $idade = 38; //Integer
    $altura = 1.80; //Float 
    $e_estudante = false; //Boolean -> true ou false

    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Variáveis</title>
    <style>
        body{
            background-color:gray;
            height: 100Vh;
            display:grid;
            place-items:center;
            padding:0;
            margin:0;
        } 
        header{
            background-color:white;
            width:60%;
            height:300px;
            border:2px solid black;
            border-radius:20px;
            text-align:center;
        }   

    </style>
</head>
<body>

   <header>
        <h1> Bom dia, <?=$nome?>! </h1>
        <?="<h2>Sua idade é {$idade} anos e você tem {$altura}m de altura</h2>"?>
        <h3><?=$e_estudante ? "É um Estudante" : "Não é um estudante"?></h3>
       
        <?php 
            /*
                Operador ternário é uma forma de verificação condicional em que o primeiro valor é uma variável booleana (V OU F) ou uma comparação (que tem como retorno V ou F). Em seguida é apresentada o retorno se o teste for verdadeiro e após isto o retorno se o teste for falso.

                teste ? verdadeiro : falso;

            */
        ?>

   </header>


    
</body>
</html>