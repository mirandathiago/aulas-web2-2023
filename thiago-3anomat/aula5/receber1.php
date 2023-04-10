<?php

    $velocidademaxima = $_GET["velocidademaxima"] ?? 40;
    $velocidadecondutor = $_GET["velocidadedirigindo"] ?? 40;

    $vinteporcento = $velocidademaxima * 1.2;
    // 40km/h -> 20% -> 8km/h
    // 40 * 1 | 40 * 0.2 => 40 + 8 => 48
    $cinquentaporcento = $velocidademaxima * 1.5;
    //$cinquaporcento = $velocidademaxima + ($velocidademaxima * 0.5);


    //Verifique se a velocidade do condutor é maior que a velocidade maxima da via e se a velocidade do condutor é menor que 20% a mais da velocidade maxima
    //    pontos = 4
    //    infracao = "Média"
    //    valor = R$130,16
    //caso a primeira verificação seja falsa verifique se a velocidade do condutor esta entre 20% e 50% a mais da velocidade maxima da via
      //  pontos = 5
      //  infracao = "Grave"
      //  valor =  R$195,23
    //caso a segunda verificação seja falsa verifique se a velocidade do condutor esta maior que 50% a mais da velocidade maxima da via
    //     pontos = 7
    //    infracao = "Gravissima"
    //    valor =  R$880,41
    //se todas as outras verificações forem falsas
    //    pontos = 0
    //    infracao = "Não Houve Infração"
    //    valor = 0        

        if($velocidadecondutor > $velocidademaxima && $velocidadecondutor <= $vinteporcento){
            $pontos = 4;
            $infracao = "Infração Média";
            $valor = 130.16;
        }else if($velocidadecondutor > $vinteporcento && $velocidadecondutor <= $cinquentaporcento){
            $pontos = 5;
            $infracao = "Infração Grave";
            $valor = 195.23;
        }else if($velocidadecondutor > $cinquentaporcento){
            $pontos = 7;
            $infracao = "Infração Gravíssima";
            $valor = 880.41;
        }else{
            $pontos = 0;
            $infracao = "Não houve infração";
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
			<h2>Resposta</h2>
			<p>A velocidade máxima da via é de <?=$velocidademaxima?>km/h e a velocidade trafegada foi de <?=$velocidadecondutor?>km/h</p>

            <?php if($pontos > 0){ ?>
                <p class="alerta-vermelho"> <?=$infracao?> gerando a perda de <?=$pontos?> pontos na carteira e um valor de multa de R$<?=$valor?> </p>
            <?php }else{  ?>  
                <p class="alerta-verde"> Parabéns! <?=$infracao?>,  não existem pontos a serem perdidos e nem multa a ser paga</p>
            <?php } ?>
			<a href="exemplo1.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>