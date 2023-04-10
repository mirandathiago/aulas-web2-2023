<!DOCTYPE html>
<html>
<head>
	<title>PHP e Formulários</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="receber1.php" method="post">
            <h1>Calculadora em PHP</h1>
            <label>
                Número 1:
                <input type="number" name="num1" value="1" min="1">
            </label>
            <label>
                Número 2:
                <input type="number" name="num2" value="1" min="1">
            </label>
            <button>Calcular</button>
		</form>
	</div>
</body>
</html>