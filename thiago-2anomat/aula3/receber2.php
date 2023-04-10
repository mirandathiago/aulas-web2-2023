<?php
    $altura = $_GET["altura"] ?? 1.6;
    $peso = $_GET["peso"] ?? 60;
    $idade = $_GET["idade"] ?? 16;
    $sexo = $_GET["sexo"] ?? "F";

    // peso / altura ao quadrado

    $imc = $peso / $altura ** 2;
   
    /* Precedência de Operadores 
        () -> Controla a precedência
        ** 
        *, / e % -> A primeira que vier da esquerda pra direita
        + e - -> A primeira que vier da esquerda pra direita
         echo ($altura + $idade) - ($peso * $idade) / $altura;
    
    */
    
    

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulário e o PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<h1>Calculadora de IMC</h1>
        <h3>O valor do IMC é de <?=$imc?></h3>
        <h4>O peso é <?=$peso?>kg e a altura é <?=$altura?> metros </h4>
	</div>
</body>
</html>