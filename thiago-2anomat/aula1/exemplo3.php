<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis no PHP</title>
</head>
<body>
    <?php
        /*
        Variaveis no PHP não precisam indicar o seu tipo.
        A tipagem é fraca e dinâmica. O tipo da informação
        é definido pelo valor que você atribui a variavel.
        As variveis podem mudar de tipo de acordo com o
        valor passado a elas.
        Para criar uma varivel no PHP iniciamos SEMPRE com
        o $ em seguida deve ser indicada ao menos uma letra
        Toda variavel no PHP deve iniciar com um valor.
        */
        
        $nome = "Thiago"; //string
        $idade = 38; //integer
        $altura = 1.80; //float
        $eestudante = false; //booleano 



    ?>

     <h1>Olá, <?=$nome?></h1>
     <h2> A sua idade é <?=$idade?> anos </h2>
     <?="<p>A sua altura é $altura metros</p>" ?>
     <p><?=$eestudante ? "É estudante do IFBA" : "Não é Estudante do IFBA"?></p>
    <?php
        /* Operador Ternário.
           testa uma expressão ou uma variavel booleana
           e de acordo com o seu valor (verdairo ou falso)
           retorna um valor.
           
           teste ? verdadeiro : falso
           exemplo: $varivel ? "Valor Verdadeiro" : "Valor Falso";
           
        */

    ?>
</body>
</html>