<?php

//A partir dessa fórmula e da tabela de IMCs,
// o código deverá exibir se o usuário está abaixo, dentro ou acima do nível recomendado

$peso = 50.0;
$altura = 1.60;

$imc = $peso / ($altura ** 2);

if ( $imc < 18.5) {
    echo "Seu IMC é $imc. Você está abaixo do peso";
} else if ($imc >= 25) {
    echo "Seu IMC é $imc. Você está acima do peso";
} else {
    echo "Seu IMC é $imc. Você está com um peso normal";
}