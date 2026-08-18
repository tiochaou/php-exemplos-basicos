<?php
// Leitura da média e das faltas via terminal
$media = (float) readline("Digite a média final do aluno: ");
$faltas = (int) readline("Digite a quantidade de faltas: ");

// Verificação das duas condições simultâneas usando o operador lógico &&
if ($media >= 6.0 && $faltas <= 15) {
    $situacao = "Aprovado";
} else {
    $situacao = "Reprovado";
}

// Exibição do resultado
echo "\n--- Resultado Final ---\n";
echo "Média: " . number_format($media, 1, ',', '.') . "\n";
echo "Faltas: " . $faltas . "\n";
echo "Situação: " . $situacao . "\n";
?>