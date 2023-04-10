<!DOCTYPE html>
<html>
<head>
	<title>Formulário com PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="receber2.php" method="get">
        <h1>Calculadora IMC</h1>

        <label>Altura:
            <input type="number" name="altura" step="0.1" value="1.6">
        </label>     
        <label>Peso:
            <input type="number" name="peso" step="0.1" value="60">
        </label>
        <label>Idade:
            <input type="number" name="idade">
        </label>
        <fieldset>Sexo:
            <label><input type="radio" name="sexo" value="M">Masculino</label>
            <label><input type="radio" name="sexo" value="F">Feminino</label>
        </fieldset>   
            <button>Calcular</button>
		</form>
	</div>
</body>
</html>