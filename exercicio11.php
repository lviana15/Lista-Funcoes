<?php
    function cm ($pol)
    {$cm = ($pol*2.54);
        return $cm;}
    echo "Digite o valor em Polegadas: ";
    $pol = (float) fgets(STDIN);
    $cm = Celsius ($pol);
    echo "O valor em Centpimetros é: $cm"."cm";