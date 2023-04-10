

<?php
    $ano = $_GET["ano"] ?? 1990;
    $anoatual = date("Y"); //A função date tendo passado o valor Y maiusculo entre aspas retorna o ano atual do sistema com digitos -> 2013

    $idade = $anoatual - $ano;
    $mensagem = "";
    if( $idade >= 18  ){
        $mensagem = "A pessoa é maior de idade";
    }else{
        $mensagem = "A pessoa é menor de idade";
    }

    //var_dump( $idade >= 18 );
    /*  >  maior que
        <  menor que
        >= maior ou igual
        <= menor ou igual
        == igualdade
        != desigualdade
        -> TODA COMPARAÇÃO RETORNA UM VALOR BOOLEANO -> TRUE(V) OU FALSE(F).
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
        <h3><?="A idade de uma pessoa que nasceu em {$ano} no ano de {$anoatual} é de {$idade} anos"?></h3>
        <?="<h4>{$mensagem}</h4>"?>
       
        <a href="exemplo1.php" class="link">Voltar</a>
	</div>
</body>
</html>