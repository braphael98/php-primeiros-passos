<?php

$array = [
    1 => "a",
    "1" => "b",
    1.4 => "c",
    true => "d",
/*se estiver sobrio e com sã consciencia isso nunca
sera usado */ 
];

foreach ($array as $key){
    echo $key.PHP_EOL;
}
