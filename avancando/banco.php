<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
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
        'saldo' => 1000,
    ],
    '012.321.534-44' => [
        'titular' => 'Claudia dos santos',
        'saldo' => 2000,
    ]

];

$contasCorrentes['023.320.450-79'] = sacar($contasCorrentes['023.320.450-79'], 100);

$contasCorrentes['123.456.789.10'] = sacar($contasCorrentes['123.456.789.10'], 100);

$contasCorrentes['055.212.432-21'] = depositar($contasCorrentes['055.212.432-21'], 200);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
