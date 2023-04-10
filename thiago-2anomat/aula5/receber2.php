<?php

    $sexo = $_POST["sexo"] ?? "F";
    $altura = $_POST["altura"] ?? 1.56;

    //Se o sexo for F
    //    pesoideal = (62.1 * altura) – 44.7
    //caso contrario
    //    pesoideal = (72.7 * altura) – 58

/*
    if($sexo == "F"){
        $pesoideal =  (62.1 * $altura) - 44.7;
        $sexotexto = "Feminino";
    }else if($sexo == "M"){
        $pesoideal =  (62.1 * $altura) - 44.7;
        $sexotexto = "Feminino";
    }    
*/

    switch($sexo){
        case "F":
            $pesoideal =  (62.1 * $altura) - 44.7;
            $sexotexto = "Feminino";
        break;
        case "M":
            $pesoideal =  (62.1 * $altura) - 44.7;
            $sexotexto = "Feminino";
        break;
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
		<h1>Calculadora de Peso Ideal</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde">O peso ideal de uma pessoa do sexo <?=$sexotexto?> com a altura de <?=$altura?>m é de <?=$pesoideal?>kg</p>
			<a href="exemplo2.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>