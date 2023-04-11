<?php
	
	$altura = $_POST["altura"] ?? 0;
	$crescimento = $_POST["crescimento"] ?? 0;
	$alvo = 1.90;


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
		<h1>Calculo de Crescimento</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Selecione uma Altura e um Crescimento Anual</h2>
			<form action="exemplo4.php" method="post">
				
				<label>Altura:
					<input type="number" name="altura" step="0.01" required>
				</label>
				<label>Crescimento Anual:
					<input type="number" name="crescimento" step="0.01" required>
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$anos = 0;
					//Repita enquanto a altura da pessoa não ultrapassar a altura alvo.

					while($altura <= $alvo){
						$altura = $altura + $crescimento;
                        $anos++;
					}
				
				echo "<h2>Foi necessário {$anos} anos para a pessoa chegar em {$alvo}m crescendo {$crescimento}m por ano</h2>";	

				}
           ?>



		</div>
	</div>
</body>
</html>