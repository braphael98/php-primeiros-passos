<?php

$idadeList = [21, 23, 43, 19, 22, 10, 49];
$umaIdade = $idadeList [1];
//o primeiro sempre é o numero zero;
$idadeList[] = 20;

foreach ($idadeList as $idade){
echo $idade.PHP_EOL;
}

    
