<?php
/*
Tendo como dados de entrada a altura e o sexo de uma pessoa (M – Masculino ou F – Feminino),
construa um algoritmo que calcule seu peso ideal, utilizando as seguintes fórmulas:
Masculino: (72.7 * altura) – 58
Feminino: (62.1 * altura) – 44.7
*/

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de Peso Ideal</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Peso Ideal</h2> 
			<form action="receber2.php" method="post">
				<label>Altura:
					<input type="number" name="altura" step="0.01" value="1.56" required>
				</label>

				<fieldset>
					<legend>Sexo: </legend>

				<label>
					<input type="radio" name="sexo" value="M">
					Masculino
				</label>
				<label>
					<input type="radio" name="sexo" value="F">
					Feminino
				</label>

				</fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>