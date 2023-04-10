<?php
    $velocidademaxima = $_GET["velocidademaxima"] ?? 40;
    $velocidadedirigindo = $_GET["velocidadedirigindo"] ?? 40;



    $vinteporcento = $velocidademaxima * 1.2;
    // (40 * 1 = 40) + (40 * 0.2 = 8) => 40 + 8 = 48
    $cinquentaporcento = $velocidademaxima * 1.5;


    //Verifique se o velocidade dirigindo está acima da velocidade maxima e está até 20% acima desta velocidade. 
      //  pontos = 4
      //  infracao = Média
      //  valor = R$130,16
    //se a verificação anterior for falsa verifique se a velocidade dirigindo é maior que 20% acima e menor que 50% acima da velocidade maxima.
      //  pontos = 5
      //  infracao = grave
      //  valor = R$195,23
    //se a verificação anterior for falsa verifique se a velocidade dirigindo é maior que 50% acima da velocidade maxima
     //   pontos = 7
     //   infracao = gravissima
     //   valor = R$880,41
   //se todas as outras verificações forem falsas
     //   pontos =  0
     //  infracao = Não Houve Infração
     //   valor = 0          


        if($velocidadedirigindo > $velocidademaxima && $velocidadedirigindo <= $vinteporcento ){
            $pontos = 4;
            $valor = 130.16;
            $infracao = "Infração Média";
        }else if($velocidadedirigindo > $vinteporcento && $velocidadedirigindo <= $cinquentaporcento){
            $pontos = 5;
            $valor = 195.23;
            $infracao = "Infração Grave";
        }else if($velocidadedirigindo > $cinquentaporcento){
            $pontos = 7;
            $valor = 880.41;
            $infracao = "Infração Gravissima";
        }else{
            $pontos = 0;
            $valor = 0;
            $infracao = "Não Houve Infração";
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
			<h2>Resposta</h2>
			<p>A Velocidade da via é de <?=$velocidademaxima?>km/h e a velocidade trafegada foi de <?=$velocidadedirigindo?>km/h </p>
            <?php if($pontos > 0){ ?>
                <p class="alerta-vermelho">A <?=$infracao?> retira <?=$pontos?> pontos da carteira de motorista e tem um valor de R$<?=$valor?> de multa</p>
            <?php }else{ ?>
                <p class="alerta-verde"> Parabéns, <?=$infracao?>. Não tem multa a ser paga</p>
            <?php } ?>


			<a href="exemplo1.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>