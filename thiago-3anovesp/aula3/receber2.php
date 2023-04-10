<?php
    $peso = $_GET["peso"] ?? 60;
    $altura = $_GET["altura"] ?? 1.55;

    $imc = $peso / $altura ** 2;

    /*
        imc = peso / (altura * altura)
        imc = peso / altura ** 2

        () -> Parêntese ignora a precedência e é executado sempre primeiro
        ** -> exponenciação -> primeiro operador a ser executado
        * e / -> multiplicação e divisão -> tem a mesma precedência. O Primeiro a ser executado é o que é lido primeiro na expressão da esquerda pra direita.
        + e - -> soma e subtração -> tem a mesma precedência. O Primeiro a ser executado é o que é lido primeiro na expressão da esquerda pra direita.



    */

?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de IMC</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<h1>Calculadora de IMC</h1>
        <h3><?="O IMC da pessoa com o peso de {$peso}kg e altura de {$altura}m é de {$imc}"?></h3>
	</div>
</body>
</html>