<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Receber Dados do Formulário</title>
</head>
<body>
    <?php
     //Operador Condolescência Nula
     //Este operador verifica se a variavel ou o indice do array não é nulo, se for nulo ele retorna o valor após o operador ?? e se não for nulo ele retorna o proprio valor da variavel. 
        $nome = $_GET["nome"] ?? "Sem Nome";
        $idade = $_GET["idade"] ?? 0;

     ?>

     <h1>Olá <?=$nome?>, você tem <?=$idade?> anos</h1>

    
</body>
</html>