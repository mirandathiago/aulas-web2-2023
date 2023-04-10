<?php

    $velocidademaxima = $_GET["velocidademaxima"] ?? 40;
    $velocidadedirigindo = $_GET["velocidadedirigindo"] ?? 40;

    $vinteporcento = $velocidademaxima * 1.2; 
    // 40  -> 20% de 40 -> 8 ---> 48 ===>>> 
    //$velocidademaxima + $velocidademaxima * 0.2;
    $cinquentaporcento = $velocidademaxima * 1.5;

    //Verifique SE a velocidade dirigida é maior que maxima permitida e também se essa velocidade é menor que 20% a mais que maxima permitida
        //pontos na carteira = 4
        //infração = media
        //multa= R$130,16
    //Se a primeira verificação não for verdadeira, verifique se a velocidade dirigida é maior que 20% e menor que 50% a mais do que maxima permitida
    //    pontos na carteira = 5
    //    infração = grave
    //    multa= R$195,23
    //Se as duas primeiras não forem verdadeiras, verifique se a velocidade dirigida é maior que 50% a mais que a maxima permitida
    //    pontos na carteira = 7
    //    infração = gravíssima
    //    multa= R$880,41
    //Se nenhuma das opções anteriores foram verdadeiras faça:
    //    pontos na carteira = 0
    //    infração = nenhuma
    //    multa= 0

    if($velocidadedirigindo > $velocidademaxima && $velocidadedirigindo <= $vinteporcento ){
        $pontos = 4;
        $infracao = "Infração Média";
        $multa = 130.16;
    }else if($velocidadedirigindo > $vinteporcento && $velocidadedirigindo <= $cinquentaporcento){
        $pontos = 5;
        $infracao = "Infração Grave";
        $multa = 195.23;
    }else if($velocidadedirigindo > $cinquentaporcento){
        $pontos = 7;
        $infracao = "Infração Gravíssima";
        $multa = 880.41;
    }else{
        $pontos = 0;
        $infracao = "Nenhuma Infração";
        $multa = 0;
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
			<h2>Infração de Velocidade</h2>
			<p><?="A velocidade da via é de {$velocidademaxima}km/h e o motorista estava dirigindo a {$velocidadedirigindo}km/h"?></p>
            
            <?php if($pontos > 0){ ?>
                <p class="alerta-vermelho"><?=$infracao?> teve uma multa de R$<?=$multa?> e perdeu <?=$pontos?> pontos na carteira</p>
            <?php }else{ ?>
                <p class="alerta-verde">Parabéns, <?=$infracao?>. Não houve multa e nem pontos perdidos</p>
            <?php } ?>

			<a href="exemplo1.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>