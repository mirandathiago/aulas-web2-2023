<?php
    $altura = $_GET["altura"] ?? 1.55;
    $peso = $_GET["peso"] ?? 60;




     $imc = $peso / ($altura * $altura);
    //$imc = $peso / $altura ** 2;

    /*
        Precedência de Operadores
        imc = peso / altura ** 2
        imc = peso / (altura * altura)

        () -> Sobrescreve a precedência, permitindo que qualquer operação seja realizada primeiro que as demais
        ** -> Exponenciação -> tem a precedência mais alta dos operadores aritméticos
        / e * -> Divisão e Multiplicação tem a mesma precedência. A operação realizada primeiro é a que estiver mais a esquerda ou a primeira a ser lida.
        + e - -> Soma e Subtração tem a mesma precedência. A operação realizada primeiro vai ser a que estiver mais esquerda. 



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
        <h3><?="O IMC de uma pessoa com o peso de {$peso}kg e altura de {$altura}m é de {$imc}"?></h3>
	</div>
</body>
</html>