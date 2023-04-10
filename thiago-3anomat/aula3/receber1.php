<?php

    $n1 = $_POST["num1"] ?? 1;
    $n2 = $_POST["num2"] ?? 1;

    /*   Operador de coalescência Nula ->  ??
        
         Este operador verifica se uma variavel existe e está setada e caso a variavel não exista irá atribuir um valor padrão posicionado após o operador.
         exemplo: $a = $variavelnaoexiste ?? 10;
                  echo $a; //Mostra o valor 10
         
    
    */

    /* Operadores Aritméticos */

    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $mult = $n1 * $n2; // * -> operador da multiplicação
    $div = (integer) ($n1 / $n2); // / -> Operador da divisão -> Retorna como resultado o valor em Float, ou seja se o valor da divisão não for inteiro ela devolve um número com as casas decimais.
    $resto = $n1 % $n2; // % -> operador de resto. O resto é gerado a partir da divisão dos dois números com o resulto em formato inteiro. 
    $expo = $n1 ** $n2; //Exponenciação -> Eleva o primeiro valor pelo segundo. 

   
    

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP com Formulários</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<h1>Calculadora em PHP</h1>
        <h3><?="{$n1} + {$n2} = {$soma}"?></h3>
        <h3><?="{$n1} - {$n2} = {$sub}"?></h3>
        <h3><?="{$n1} x {$n2} = {$mult}"?></h3>
        <h3><?="{$n1} ÷ {$n2} = {$div}"?></h3>
        <!--  ÷ -> Alt e digite 0247 -->
        <h4><?="O resto da divisão é {$resto}"?></h4>
        <h3><?="{$n1}<sup>{$n2}</sup> = {$expo}"?></h3>

	</div>
</body>
</html>