<?php

    $altura = $_POST["altura"] ?? 1.56;
    $sexo = $_POST["sexo"] ?? "F";

    //Masculino: (72.7 * altura) - 58
    //Feminino: (62.1 * altura) - 44.7
/*
    if($sexo == "M"){
        $pesoideal = (72.7 * $altura) - 58; 
        $sexotxt = "Masculino";
    }else if($sexo == "F"){
        $pesoideal = (62.1 * $altura) - 44.7;
        $sexotxt = "Feminino";
    }*/

    switch($sexo){
        case "M":
            $pesoideal = (72.7 * $altura) - 58; 
            $sexotxt = "Masculino";
        break;
        case "F":
            $pesoideal = (62.1 * $altura) - 44.7;
            $sexotxt = "Feminino";   
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
			<p class="alerta-amarelo">Uma pessoa do sexo <?=$sexotxt?> com <?=$altura?>m tem o peso ideal em <?=$pesoideal?>kg</p>
			<a href="exemplo2.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>