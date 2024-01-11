<?php

$contasCorrentes = [
    '123.456.789.10' => [
        'titular' => 'Bruno',
        'saldo' => 1000,
    ],
    '023.320.450-79' => [
        'titular' => 'Lucas',
        'saldo' => 1500,
    ],
    '055.212.432-21' => [
        'titular' => 'Pedro',
        'saldo' => 1254,
    ]
];

$contasCorrentes['012.321.534-44'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];



foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf. $conta['titular'].PHP_EOL;
}
