<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado." . PHP_EOL;

//condicional

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Tchau!" . PHP_EOL;

/*
 OU -> or ou ||
IGUAL -> ==
E -> and ou &&
MAIOR OU IGUAL -> >=
MENOR OU IGUAL -> <=
DIFERENTE -> !=
MAIOR QUE -> >
MENOR QUE -> <

*/

//operador ternário

$condicao = $idade < 18 ? "Menor de idade" : "Maior de idade";

echo $condicao;