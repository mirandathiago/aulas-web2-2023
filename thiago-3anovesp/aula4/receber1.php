<?php
    $ano = $_GET["ano"] ?? 1990;
    $anoatual = date("Y");
    /* a função date retorna uma informação de uma data ou data atual de acordo com o formato textual passado. Neste caso "Y" retorna o ano em 4 digitos -> 2023*/

    $idade = $anoatual - $ano;

    //Se a idade for maior ou igual a 18 anos 
    //crie uma mensagem que diga: Pessoa Maior de Idade
    //Caso a idade não seja maior ou igual a 18 anos 
    //crie outra mensagem que diga: Pessoa Menor de Idade.

    if( $idade >= 18 ){
        $mensagem = "Pessoa Maior de Idade";
        $classe = "vermelho";
    }else{
        $mensagem = "Pesssoa Menor de Idade";
        $classe = "verde";
    }
    

    /*  Operadores de Comparação -> são operadores que comparam dois valores ou variaveis retornando um valor booleano -> verdadeiro ou falso.
    var_dump( $idade >= 18 );
    > Maior que
    < Menor que
    >= Maior ou igual
    <= Menor ou igual
    == Igualdade. Operador de Comparação que é diferente do operador = que é o de atribuição.
    != Desigualdade.
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
		<h3>Uma pessoa que nasceu em <?=$ano?> tem <?=$idade?> anos em <?=$anoatual?></h3>
        <h4 class="<?=$classe?>"><?=$mensagem?></h4>
        <br>
        <a href="exemplo1.php" class="link">Voltar</a>

	</div>
</body>
</html>