<?php

    $num1 = $_POST["num1"] ?? "";
    $num2 = $_POST["num2"] ?? "";
    $op = $_POST["operacao"] ?? "";

    
    switch($op){
        case "1": //Verifica se o valor da variavel é igual ao testado
            $conta = $num1 + $num2;
            $resultado = "{$num1} + {$num2} = {$conta}";
        break; //Finaliza um caso
        case "2":
            $conta = $num1 - $num2;
            $resultado = "{$num1} - {$num2} = {$conta}";
        break;
        case "3":
            $conta = $num1 / $num2; //÷ -> ALT + 0247
            $resultado = "{$num1} ÷ {$num2} = {$conta}";
        break;
        case "4":
            $conta = $num1 * $num2;
            $resultado = "{$num1} x {$num2} = {$conta}"; 
        break;
        case "5":
            $conta = $num1 ** $num2;
            $resultado = "{$num1}<sup>{$num2}</sup>={$conta}";
        break;
        case "6":
            $conta = intdiv($num1,$num2);
            $resto = $num1 % $num2;
            $resultado = "{$num1} ÷ {$num2} = {$conta} com o resto {$resto}";
        break;        
        default:
            $resultado = "Operação Inválida";    


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
		<h1>Calculadora em PHP</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora</h2>
			<form action="exemplo1.php" method="post">
				<label>Número 1:
		<input type="number" name="num1" required value="<?=$num1?>">
				</label>
				<label>Número 2:
		<input type="number" name="num2" required value="<?=$num2?>">
				</label>
				<label>Operação:
				<select name="operacao">
    <option <?=$op=="" ? "selected" : ""?>></option>
    <option <?=$op=="1" ? "selected" : ""?> value="1">Soma</option>
    <option <?=$op=="2" ? "selected" : ""?> value="2">Subtração</option>
    <option <?=$op=="3" ? "selected" : ""?> value="3" >Divisão</option>
    <option <?=$op=="4" ? "selected" : ""?> value="4">Multiplicação</option>
    <option <?=$op=="5" ? "selected" : ""?> value="5" >Exponenciação</option>
    <option <?=$op=="6" ? "selected" : ""?> value="6">Divisão Inteira com Resto</option>						
					</select>
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>

            <?php
                //var_dump($_POST);
                //echo "<hr>";
                //var_dump($_SERVER["REQUEST_METHOD"]);

                $metodo = $_SERVER["REQUEST_METHOD"];

                if($metodo == "POST"){
                    echo "<p class='alerta-verde'> {$resultado} </p>";
                }else{
                    echo "<p class='alerta-amarelo'>Aguardando os dados do Formulário</p>";
                }


            ?>

			
		</div>
	</div>
</body>
</html>