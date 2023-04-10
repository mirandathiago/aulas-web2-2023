<?php
   
   $peso = $_GET["peso"] ?? 60;
   $altura = $_GET["altura"] ?? 1.55;

   $imc = $peso / $altura ** 2;

   /* Precedência de Operadores 

   3 + 5 * 2 / 4 ** 2 * 7 - 3 
   3 + 5 * 2 / 16 * 7 - 3
   3 + 10 / 16 * 7 - 3  
   3 + 0,625 * 7 - 3
   3 + 4,375 - 3
   7,375 - 3
   4,375

   ((3 + 5 * 2)/ 4) ** 2 * 7 - 3
   ((3 + 10) / 4) ** 2 * 7 - 3
   (13/4) ** 2 * 7 - 3
   3,25 ** 2 * 7 - 3
   10,56 * 7 - 3
   73,93 - 3
   70,93

    () -> São as primeiras expressões a serem executadas lidas da esquerda pra direita.
    ** -> exponenciação é realizada primeiro que as demais operações
    * e / -> multiplicação e divisão tem a mesma precedencia. A que estiver mais a esquerda é a primeira a ser executada.
    + e - -> soma e subtração tem a mesma precedência. A que estiver mais a esquerda é a primeira a executada

   */


?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulário no PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<h1>Calculadora de IMC</h1>
        <h3><?="O IMC da altura {$altura}m e do peso {$peso}kg é de {$imc}"?></h3>
	</div>
</body>
</html>