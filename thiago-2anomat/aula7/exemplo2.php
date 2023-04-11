<?php
	
    $inicial = $_POST["inicial"] ?? 0;
    $final = $_POST["final"] ?? 0;

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
		<h1>Gerador de Números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha o número inicial e o número final</h2>
			<form action="exemplo2.php" method="post">
				
				<label>Inicial:
					<input type="number" name="inicial" required value="<?=$inicial?>">
				</label>
				<label>Final:
					<input type="number" name="final" required value="<?=$final?>">
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
            <?php
            $metodo = $_SERVER["REQUEST_METHOD"];

            if($metodo == "POST"){
                 
            for($c = $inicial; $c <= $final; $c++ ){
                echo "<li>{$c}</li>";
            }


           }
           
            ?>

		</div>
	</div>
</body>
</html>