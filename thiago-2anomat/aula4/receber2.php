<?php
    $nome = $_POST["nome"] ?? "";
    $nota1 = $_POST["nota1"] ?? 0;
    $nota2 = $_POST["nota2"] ?? 0;
    $nota3 = $_POST["nota3"] ?? 0;

    $media = ($nota1 + $nota2 + $nota3) / 3;
    $mensagem = "";
    if( $media >= 6 ){
        $mensagem = "<h3 class='aprovado'>Aluno Aprovado</h3>";
    }else{
        $mensagem = "<h3 class='reprovado'>Aluno Reprovado</h3>"; 
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
    <h2><?="Aluno(a): {$nome} - Média:".number_format($media,2)?></h2>
    <h2>Aluno(a): <?=$nome?> - Média: <?=number_format($media,2)?></h2>
    <?=$mensagem?>

    </div>
</body>
</html>