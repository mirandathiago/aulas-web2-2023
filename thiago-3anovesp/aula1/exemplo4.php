<?php

$pessoa = ["Thiago",38,1.8,false];

echo $pessoa[0];
echo "<br>";
//var_dump($pessoa);
//echo "<br>";
print_r($pessoa);
echo "<br>";

$pessoa2 = ["nome" => "Thiago","idade" => 38, "altura" => 1.8,"estudante" => false];

print_r($pessoa2);
echo "<br>";
echo $pessoa2["nome"];