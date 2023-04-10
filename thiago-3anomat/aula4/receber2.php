<?php

    $nome = $_GET["nome"] ?? "";
    $nota1 = $_GET["nota1"] ?? 0;
    $nota2 = $_GET["nota2"] ?? 0;
    $nota3 = $_GET["nota3"] ?? 0; 

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if($media >= 6){
        $status = "Aprovado";
    }else{
        $status = "Reprovado";
    }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Idade</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<div class="container">
        <h2>Formulário de notas</h2>
        <h3>Aluno: <?=$nome?> - 
            Média: <?=number_format($media,1)?>
        </h3>
        <h4>Status: <?=$status?> </h4>
    </div>
</body>
</html>