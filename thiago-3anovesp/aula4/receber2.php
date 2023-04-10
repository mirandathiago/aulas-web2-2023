<?php

    $nome = $_POST["nome"] ?? "";
    $nota1 = $_POST["nota1"] ?? 0;
    $nota2 = $_POST["nota2"] ?? 0;
    $nota3 = $_POST["nota3"] ?? 0;

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
	<title>Notas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<div class="container">
        <h2>Formulário de notas</h2>
        <h3>Nome: <?=$nome?> - 
            Média: <?=number_format($media,2)?>
        </h3>
        <h4>Status: <?=$status?> </h4>

    </div>
</body>
</html>