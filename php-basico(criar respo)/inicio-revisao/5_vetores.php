<?php

//função com retorno simples
function somar(float $a, float $b):float{
    return $a + $b;
}

//exibir resultado
echo somar(4.5, 8.5);
echo"<br>";

//procedimento (função sem retorno)
function saudacao($nome = "aluno") {
    echo "Olá, $nome! bem vindo ao PHP. 
    <br>";
    }

//exibindo a saudação
saudacao()
;
saudacao("Maria");

//outro procedimento
function mostrarlinha() {
    echo "------------------------------<br>";
}
mostrarlinha();