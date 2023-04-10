<?php
    $ano = $_GET["ano"];
    $anoatual = date("Y"); /*A função date retorna informações de uma data ou da data atual de acordo com os parâmetros passados, neste caso Y maiusculo retorna o ano em 4 digitos = 2023*/

    $idade = $anoatual - $ano;

    //se idade for maior ou igual a 18 anos faça
    //crie uma mensagem informando que a pessoa é maior
    //e se não for maior? Faça:
    //crie uma mensagem informando que a pessoa é menor
   
    if( $idade >= 18 ){
        $mensagem = "<h4 class='verde'>A pessoa é maior de idade</h4>";
    }else{
        $mensagem = "<h4 class='vermelha'>A pessoa é menor de idade</h4>";
    }    


    /*
    var_dump( $idade >= 18 );
    Operadores de Comparação
        > Maior que
        < Menor que
        >= Maior ou Igual
        <= Menor ou igual
        == Igualdade
        != Desigualdade
        Toda operação de comparação retorna um valor booleano -> True (v) ou False (f)
    */


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
    <h1>Calculadora de Idade</h1>
    <h3>A pessoa que nasceu no ano de <?=$ano?> tem <?=$idade?> anos no ano de <?=$anoatual?></h3>
    
    <?=$mensagem?>
    <br>
    <a href="exemplo1.php" class="link">Voltar</a>

	</div>
</body>
</html>