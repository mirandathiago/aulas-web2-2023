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
		<h1>Estrutura While</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			
          <?php
                /*idade -> idadehumana + 7

                joao tem 15 anos
                Bilu acabou de nascer*/

                //Inicialização
                $joao = 57;
                $bilu = 0;
                $anos = 0;

                //Repetição: A repetição irá ocorrer enquanto a idade de bilu for menor ou igual a idade de João
                while($bilu <= $joao){

                $bilu = $bilu + 7;
                $joao = $joao + 1;
                $anos++; //$anos = $anos + 1 -> $anos+=1

                }

                echo "<p class='alerta-verde'>Passaram {$anos} anos para Bilu ultrapassar João em sua idade quando utilizada a idade de cachorro</p>";





            ?>


		</div>
	</div>
</body>
</html>