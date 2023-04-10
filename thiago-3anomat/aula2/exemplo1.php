<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Arrays no PHP</title>
</head>
<body>
    <?php
        $dog = ["Jade",2,4.5,true];

        //print_r($dog); //Imprimir informações sobre uma variavel que inclui a possibilidade de imprimir arrays com seus valores e indices.
        // echo "<br>";
        //var_dump($dog);//Função que imprime informações sobre uma variavel, incluindo o seu TIPO, seu valor, seus indices e sua quantidade (estes ultimos dois para variaveis do tipo array)

     ?>

        <h1>O nome do cachorro é <?=$dog[0]?></h1>
        <h2><?="A idade é {$dog[1]} anos e o seu peso é {$dog[2]}kg "?></h2>
        <p><?=$dog[3] ? "Vacinado" : "Não Vacinado"?></p>


</body>
</html>