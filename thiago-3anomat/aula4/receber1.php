<?php



    $ano = $_POST["ano"] ?? 1990;
    $anoatual = date("Y");
    /* A função date retorna uma data ou a data atual no formato selecionado por parâmetro. Neste caso o valor "Y" retorna apenas o ano com 4 algarismos da data atual */

    $idade = $anoatual - $ano;
    
    //Verificar Se a idade for maior ou igual a 18, se for verdade irei fazer a linha abaixo:
    //    criar uma mensagem informando que a pessoa é maior de idade.
    //caso a idade não seja maior ou igual a 18 faça a linha abaixo:
     //   criar uma mensagem informando que a pessoa é menor de idade.

    if( $idade >= 18 ){
        $mensagem = "A pessoa é Maior de idade"; 
        $classe = "vermelho";   
    }else{
        $mensagem = "A pessoa é Menor de idade";
        $classe = "verde";
    }
   

    /*
        var_dump( $idade >= 18 );
        Operadores de Comparação -> São operadores que comparam dois valores ou variáveis retornando um valor booleano -> true (V) e false (F).

        >  maior aque
        <  menor que
        >= maior ou igual
        <= menor ou igual
        == igualdade
        != desigualdade
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
        <h3>A pessoa nascida em <?=$ano?> vai ter 
         <?=$idade?> anos em <?=$anoatual?></h3>
		<h4 class="<?=$classe?>"> <?=$mensagem?> </h4>
	</div>
</body>
</html>