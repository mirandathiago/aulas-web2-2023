<?php
/*
Faça um programa em php que receba a velocidade máxima permitida em uma avenida e a velocidade
com que o motorista estava dirigindo nela e calcule e apresente a multa que uma pessoa vai receber,
sabendo que são pagos:
São 3 valores para a multa por excesso de velocidade:
Infração Média - Até 20% acima do limite permitido: R$130,16. São descontados quatro (4) pontos na carteira de motorista.
Infração Grave - De 20% até 50% acima do limite permitido: R$195,23. São descontados cinco (5) pontos na carteira de motorista.
Infração gravíssima - Acima de 50% do limite permitido: R$880,41. São descontados sete (7) pontos na carteira de motorista.
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
		<h1>Calculadora de Infração de Trânsito</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Multa por Velocidade</h2>
			<form action="receber1.php" method="get">
				<label>Velocidade Máxima Permitida na Via:
					<input type="number" name="velocidademaxima" required>
				</label>

				<label>Velocidade que estava dirigindo:
					<input type="number" name="velocidadedirigindo" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>