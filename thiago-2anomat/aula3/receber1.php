<?php
    $n1 = $_POST["num1"] ?? 1;
    $n2 = $_POST["num2"] ?? 1;
    /*
        NULL COALESCING -> coalescência nula
        Verifica se uma variavel existe e caso ela não exista atribui um valor padrão a ela. 

    */

    $soma = $n1 + $n2; //Soma
    $sub = $n1 - $n2; //Subtração
    $mult = $n1 * $n2; //Multiplicação
    $div = $n1 / $n2; //Divisão
    $resto = $n1 % $n2; //Resto da divisão
    $expo = $n1 ** $n2; //Exponenciação -> primeiro valor elevado pelo segundo

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulário em PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<h1>Calculadora em PHP</h1>
        <h3><?="{$n1} + {$n2} = {$soma}"?></h3>
        <h3><?="{$n1} - {$n2} = {$sub}"?></h3>
        <h3><?="{$n1} x {$n2} = {$mult}"?></h3>
        <h3><?="{$n1} ÷ {$n2} = {$div} e o resto é {$resto}"?></h3>
        <h3><?="{$n1}<sup>{$n2}</sup> = {$expo}"?></h3>

        <!-- ÷ -> alt + 0247 -->

	</div>
</body>
</html>