<!DOCTYPE html>
<html>
<head>
	<title>Notas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<div class="container">
   <h2>Formulário de notas</h2>
  <form action="receber2.php" method="post">
    <label>Nome do aluno:
    <input type="text" name="nome" required>
    </label>
    
    <label>Nota 1:
    <input type="number" step="0.1" name="nota1" min="0" max="10" required>
    </label>
    <label>Nota 2:
    <input type="number" step="0.1"  name="nota2" min="0" max="10" required>
    </label>
    <label>Nota 3:
    <input type="number" step="0.1" name="nota3" min="0" max="10" required>
    </label>
    <button>Enviar</button>
  </form>
</div>
</body>
</html>