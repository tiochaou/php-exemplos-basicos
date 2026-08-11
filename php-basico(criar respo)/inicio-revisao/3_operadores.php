<?php
 
 $idade = 18;
 $itemdocumento = true;

 if ($idade >= 18 && $itemdocumento == true) {
     echo "APTO a tirar sua carteira de motorista";
 } else {
     echo "Não esta apto a tirar sua carteira de motorista";
 }

 //declaração de variaveis
 $feriado = false;
 $fimdesemana = true;

 //condicional com operador lógico (ou)
    if ($feriado || $fimdesemana) {
        echo "Pode viajar";
    } else {
        echo "Não pode viajar";
    }