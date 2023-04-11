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
		<h1>Estrutura de Repetição</h1>
	</header>
	<div class="container">
		<div class="box resposta">
		
           <?php
                /* Estruturas de Repetição são estruturas de código voltadas a através de uma condição repetir blocos de código*/

            //Repita esse código para uma variavel que inicia de 1 e vá sendo modificada de 1 em 1 até que ela alcance o valor 10.
            
            //$i++ => $i = $i + 1 => $i += 1
            for($i=10;$i<=100;$i += 10){   
                echo "<li>{$i}</li>";
            }    


          ?>


		</div>
	</div>
</body>
</html>