<?php

//dado um número qualquer exibir a tabuada de multiplicação desse número de 1 à 9

$entrada = 5;

for ($i = 1; $i <= 9; $i++) {
      echo "$entrada x $i = " . $entrada*$i . PHP_EOL;   
}