<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Variaveis com PHP</title>
</head>
<body>
    <?php
        /*
            Para criar uma variavel na linguagem PHP é necessário utilizar o caracter $, após o $ deve vir ao menos uma letra, que pode ser seguida de números, underline, traço... 
            Toda variavel criada no PHP deve receber imediatamente um valor. 
            O sinal de atribuição de valor no php é o = 
            PHP é linguagem com tipagem Fraca e dinâmica. Não é necessário indicar o tipo da variavel em sua criação e o tipo é reconhecido pelo seu valor recebido. 
        */

        $nome = "Thiago"; //string
        $idade = 38; //integer
        $altura = 1.80; //float
        $e_um_aluno = false; //boolean
       
 ?>
    
   <h1><?=$nome?></h1>
   <h2><?="tem {$idade} anos e {$altura}m"?> </h2> 
   <h3><?=$e_um_aluno ? "É um aluno do IFBA" : "Não é um aluno do IFBA"?></h3>
   <?php
    /*
        Operador ternário -> busca simplificar a estrutura condicional IF e ELSE.
        -> condicao ? VALOR A SER RETORNADO CASO VERDADEIRO : VALOR A SER RETORNADO CASO FALSO
    */
   ?>




</body>
</html>