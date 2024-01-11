<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}



$contasCorrentes = [
    '123.456.789.10' => [
        'titular' => 'Bruno Perez',
        'saldo' => 1000,
    ],
    '023.320.450-79' => [
        'titular' => 'Lucas Maciel',
        'saldo' => 300,
    ],
    '055.212.432-21' => [
        'titular' => 'Pedro da sailva',
        'saldo' => 1254,
    ],
    '012.321.534-44' => [
        'titular' => 'Claudia dos santos',
        'saldo' => 2000,
    ]

];

$contasCorrentes['023.320.450-79'] = sacar($contasCorrentes['023.320.450-79'], 500);

$contasCorrentes['123.456.789.10'] = sacar($contasCorrentes['123.456.789.10'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
