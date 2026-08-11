<?php

//laço FOR -exemplo aplicado em tabuada
for ($i=1; $i <= 1; $i++) 
    for ($j=1; $j <= 10; $j++) {
        echo "$8 x $i = " . (8 * $j) . "<br>";
    }

    //while - repetidor (enquanto) contagem regressiva
    echo"<br>";
    $n = 8;
    while ($n >= 0) {
        echo "$n <br>";
        $n--;
    }

//do while - repetidor (faça enquanto) executa apenas 1 vez
    echo"<br>";
    $j = 8;
    do {
        echo "J vale $j <br>";
        $j++;
    } while ($j <= 10);
