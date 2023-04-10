<!DOCTYPE html>
<html>
<head>
	<title>Formulário no PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="receber2.php" method="get">
           <h1>Calculo de IMC</h1>
           <label>
            Peso:
            <input type="number" step="0.1" name="peso" value="60">
           </label>
           <label>
            Altura:
            <input type="number" name="altura" step="0.01" value="1.55">
           </label>
           <button>Calcular</button>
		</form>
	</div>
</body>
</html>