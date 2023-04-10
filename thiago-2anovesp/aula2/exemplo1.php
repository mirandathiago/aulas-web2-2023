<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Arrays no PHP</title>
</head>
<body>
  <?php
   $cachorro = ["Pimpolho",2,8.2,"Vira-lata",true];
   //print_r($cachorro);
   //echo "<hr>";
   //var_dump($cachorro);
   

  ?>    
    
   <h1><?=$cachorro[0]?></h1>
   <h3>A idade é <?=$cachorro[1]?> anos</h3>
   <h3><?="O peso é {$cachorro[2]}kg"?>  </h3> 
   <h4> <?=$cachorro[4] ? "Vacinado" : "Não Vacinado"?> </h4>

</body>
</html>