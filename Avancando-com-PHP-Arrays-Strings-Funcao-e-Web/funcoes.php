<?php

//subrotina (sem retorno)                  "void": tipagem indica que não haverá retorno
function exibeMensagem(string $mensagem) : void
{
    echo $mensagem . PHP_EOL;
}

//função (tem retorno)  tipagem dos parâmetros e do retorno, respectivamente
function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
}
                                    //o & passa a variável por referência, ou seja, dá acesso direto à instancia daquela variável
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

    echo $conta['titular'] . PHP_EOL;
}