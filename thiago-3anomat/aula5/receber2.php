<?php

    $altura = $_POST["altura"] ?? 1.54;
    $sexo = $_POST["sexo"] ?? "F";

    /*
    if( $sexo == "F"){
        $pesoideal = 62.1 * $altura - 44.7;
    }else if($sexo == "M"){
        $pesoideal = 72.7 * $altura - 58;
    }*/

    switch($sexo){
        case "F":
            $pesoideal = 62.1 * $altura - 44.7;
            $sexotxt = "Feminino";
        break; 
        case "M":
            $pesoideal =  72.7 * $altura - 58;
            $sexotxt = "Masculino";
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

			<p>Uma pessoa do sexo <?=$sexotxt?> com a altura de <?=$altura?>m tem como peso ideal <?=$pesoideal?>kg</p>

			<a href="exemplo2.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>