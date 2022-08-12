<?php

$string = "Essa string é um exemplo";

// o strlen é ideal pra caracteres simples (1byte) pois conta os bytes, não os caracteres em si.
// o mb_strelen é ideal para caracteres multibytes, pois considera cada caracter individualmente.
echo mb_strlen($string) . PHP_EOL;
echo strlen($string) . PHP_EOL;

//a função nativa do PHP não funciona em caracteres acentuados
echo mb_strtoupper($string) . PHP_EOL;
echo strtoupper($string) . PHP_EOL;

echo mb_strtolower($string) . PHP_EOL;
echo strtolower($string) . PHP_EOL;

//                                       tabela desejada   tabela atual
$convertida = mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');
echo $convertida . PHP_EOL;


                                //VÁRIOS PARAMETROS PRÉ-DEFINIDOS
echo mb_convert_case($string, MB_CASE_TITLE);