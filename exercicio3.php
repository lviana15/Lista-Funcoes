<?php
    function aprovadooureprovado ($nota1, $nota2)
    {$media= ($nota1+$nota2)/2;

        if ($media<6)
        {echo "Você foi Reprovado, com $media de média";}
        else {echo "Você foi aprovado! Com $media de média";}}
    echo "Digite a nota 1: ";
    $nota1= (float) fgets(STDIN);
    echo "Digite a nota 2: ";
    $nota2= (float) fgets(STDIN);
    echo aprovadooureprovado($nota1,$nota2);