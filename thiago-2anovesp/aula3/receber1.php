<?php
    $n1 = $_POST["num1"] ?? 1;
    $n2 = $_POST["num2"] ?? 1;

    /* Operador  Coalescência nula 
        Operador representado por ?? verifica se uma variavel está setada ou seja se ela existe ou tem valor e caso não tenha valor retorna um valor predefinido.
    */

    // Operadores Aritméticos
    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $mult = $n1 * $n2;
    $div = $n1 / $n2; //Divisão com o retorno em Decimal
    $resto = $n1 % $n2; //Realiza a divisão com resultado inteiro e retorna o resto.
    $expo = $n1 ** $n2; //Exponenciação -> primeiro valor elevado ao segundo. 


?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulário no PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<h1>Calculadora em PHP</h1>
        <h3><?="{$n1} + {$n2} = {$soma}"?></h3>
        <h3><?="{$n1} - {$n2} = {$sub}"?></h3>
        <h3><?="{$n1} x {$n2} = {$mult}"?></h3>
        <h3><?="{$n1} ÷ {$n2} = {$div}"?></h3>
        <h3><?="O resto da divisão de {$n1} e {$n2} é {$resto}"?></h3>
        <h3><?="{$n1}<sup>{$n2}</sup> = {$expo}"?></h3>
        <!-- Para o símbolo da divisão -> Alt e digite 0247 -->
        <a href="exemplo1.php" class="btn">Voltar</a>
	</div>
</body>
</html>