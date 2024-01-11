<?php

$conta1 = [
    'titular' => 'Bruno',
    'saldo' => 1000,
];
$conta2 = [
    'titular' => 'Lucas',
    'saldo' => 1500,
];
$conta3 = [
    'titular' => 'Pedro',
    'saldo' => 1254,
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
