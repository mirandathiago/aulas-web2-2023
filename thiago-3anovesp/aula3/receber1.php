<?php
    $n1 = $_POST["num1"] ?? 1;
    $n2 = $_POST["num2"] ?? 1;



        /* Coalescencia Nula ->  ??
        Verifica se uma variavel existe e está setada e caso ela não exista este operador retorna um valor padrão definido definido pelo programador.
            
    
    */

    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $mult = $n1 * $n2;
    $div = $n1 / $n2; //Divisão retorna o resultado como um número que pode ter casas decimais. 
    $resto = $n1 % $n2; //O resto da divisão retorna o valor do resto após a divisão ser realizada com o resultado inteiro.
    $expo = $n1 ** $n2; //Eleva o primeiro número ao segundo. 


?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<h1>Calculadora em PHP</h1>

        <h3><?="{$n1} + {$n2} = {$soma}"?></h3>
        <h3><?="{$n1} - {$n2} = {$sub}"?></h3>
        <h3><?="{$n1} x {$n2} = {$mult}"?></h3>
        <h3><?="{$n1} ÷ {$n2} = {$div}"?></h3>
        <h4><?="O resto da divisão é {$resto}"?></h4>
        <h3><?="{$n1}<sup>{$n2}</sup>={$expo}"?></h3>
        <!-- ÷ -> Alt e digite 0247 -->
	</div>
</body>
</html>