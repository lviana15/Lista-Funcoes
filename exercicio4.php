<?php
    function pesoideal ($sexo, $altura)
    {if ($sexo==1)
    {$pesoideal= (62.1*$altura)-44.7;
        echo "O seu peso na gravidade atual terrestre é de: $pesoideal"." Kgs";}
    elseif ($sexo==2)
    {$pesoideal= (72.7*$altura)-58;
        echo "O seu peso na gravidade atual terrestre é de: $pesoideal"." Kgs";}}
    echo "Digite 1-feminino e 2-masculino: ";
    $sexo= (int) fgets(STDIN);
    echo "Digite a sua altura em cm: ";
    $altura= (int) fgets(STDIN);
    $altura= $altura/100;
    echo pesoideal($sexo,$altura);