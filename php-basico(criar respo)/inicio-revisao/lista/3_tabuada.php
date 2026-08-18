<?php
// Número armazenado no início do código
$numero = (int) readline("Digite um número para exibir a tabuada: ");

echo "--- Tabuada do $numero ---\n";

// Estrutura de repetição for de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "{$numero} x {$i} = {$resultado}\n";
}
?>