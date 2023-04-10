<?php

//Caso o seu arquivo PHP não tenha outros códigos da linguagem HTML o fechamento do delimitador de código é opcional. 


/* Estrutura de Dados - Array 
   Arrays são tipos de dados que permitem que uma variavel possa ter multiplos valores ao mesmo tempo, sendo identificados através de indice. 
*/

 $aluno = ["joão",15,"Informática"];

 echo $aluno[0];
 echo "<br>";
 echo $aluno[1];
 echo "<br>";
 echo $aluno[2];

 echo "<h2>{$aluno[0]} tem {$aluno[1]} anos e estuda {$aluno[2]}</h2>";

 $aluno2 = ["nome" => "Maria","idade"=>16,"curso"=>"Informática"];


 echo "<h2>{$aluno2["nome"]} tem {$aluno2["idade"]} anos e estuda {$aluno2["curso"]}</h2>";

