<?php

//require é utilizado quando o arquivo é indispensável ao funcionamento do programa. "include" quando é dispensável.
//require_once é utilizado para que a requisição seja feita uma única vez, e ignorada caso haja um novo require.
require_once 'funcoes.php' ;

$contasCorrentes = [
'123.456.789-10' => [
    'titular' => 'Vinicius',
    'saldo' => 1000
],
'123.455.789-10' => [
    'titular' => 'Maria',
    'saldo' => 10000
], 
'123.567.639-10' => [
    'titular' => 'Alberto',
    'saldo' => 300
]
];


//acessando a chave/indíce '123.456.789-10' na array associativa $contasCorrentes
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], -500);


//                          identificadores das chaves iteradas e identificador dos itens iterados, respectivamente
foreach ($contasCorrentes as $cpf => $conta) {
                //string de sintaxe complexa - interpolação
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
                //string de sintaxe simples - interpolação
    //exibeMensagem("$cpf $conta[titular]} $conta[saldo]");
}
