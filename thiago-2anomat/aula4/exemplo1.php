<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Idade</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<div class="container">
    <h1>Calculadora de Idade</h1>
		<form action="receber1.php" method="get">
			<label>Idade:
			  <input type="number" name="ano" min="1900" max="2023" value="1990" required>
           </label>
			<button>Enviar</button>
		</form>
	</div>
</body>
</html>