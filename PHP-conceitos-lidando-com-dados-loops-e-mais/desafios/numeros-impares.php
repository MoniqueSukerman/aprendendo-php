<?php

//escrever os números impares de 0 - 100 no console

for ($contador = 0; $contador < 100; $contador++) {
      if(($contador % 2) != 0) {
        echo "#$contador" . PHP_EOL;
      }     
}