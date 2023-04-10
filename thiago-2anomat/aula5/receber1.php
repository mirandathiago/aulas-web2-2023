<?php

    $velocidademaxima = $_GET["velocidademaxima"] ?? 40;
    $velocidadedirigindo = $_GET["velocidadedirigindo"] ?? 40;


    $vinteporcento = $velocidademaxima * 1.2; 
    // $vinteporcento = $velocidademaxima + $velocidademaxima * 0.2;
    $cinquentaporcento = $velocidademaxima * 1.5;

    //se velocidade que a pessoa está dirigindo for maior que a permitida e menor que 20% da velocidade permitida
        //voce deve indicar a infração media, 4 pontos e  R$130,16 
    //se não for você verificar se a velocidade dirigida for maior que 20% da velocidade permitida e menor que 50% dela
        //voce deve indicar a infração grave, 5 pontos, 195,23
    //se não for voce verificar se a velocidade dirigida é maior que 50% da velocidade permitida.
       // voce de indicar a infração gravissima, 7 pontos e R$880,41
   // se não nenhum dos casos
     //   voce deve indicar que a pessoa não cometeu nenhuma infração.
   
  
        if($velocidadedirigindo > $velocidademaxima && $velocidadedirigindo <= $vinteporcento ){
            $infracao = "Infração Média";
            $pontos = 4;
            $valor = 130.16;
        }else if($velocidadedirigindo > $vinteporcento && $velocidadedirigindo <= $cinquentaporcento){
            $infracao = "Infração Grave";
            $pontos = 5;
            $valor = 195.23;
        }else if($velocidadedirigindo > $cinquentaporcento){
            $infracao = "Infração Gravissima";
            $pontos = 7;
            $valor = 880.41;
        }else{
            $infracao = "Não Houve Infração";
            $pontos = 0;
            $valor = 0;
        }

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
		<div class="box resposta">
			<h2>Infração</h2>
			<p>A velocidade permitida foi de <?=$velocidademaxima?>km/h e o motorista estava trafegando a <?=$velocidadedirigindo?>km/h</p>
            <?php if($pontos > 0){ ?>
                <p class="alerta-vermelho">Esta foi <?=$infracao?> gerando <?=$pontos?> pontos na carteira de motorista e um valor de multa de R$<?=$valor?></p>
            <?php }else{ ?>
                <p class="alerta-verde">Parabéns, <?=$infracao?></p>
            <?php } ?>        

			<a href="exemplo1.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>