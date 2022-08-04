<?php

$contasCorrentes = [
12345678910 => [
    'titular' => 'Vinicius',
    'saldo' => 1000
],
12345578910 => [
    'titular' => 'Maria',
    'saldo' => 10000
], 
12356763910 => [
    'titular' => 'Alberto',
    'saldo' => 300
]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}