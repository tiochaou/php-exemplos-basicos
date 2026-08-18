<?php
// Array contendo as notas de 5 alunos
$notas = [7.5, 8.0, 5.5, 9.2, 6.8];

$soma = 0;
$maiorNota = $notas[0];
$menorNota = $notas[0];

// Percorre o vetor usando foreach
foreach ($notas as $nota) {
    $soma += $nota;

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}

// Cálculo da média da turma
$mediaTurma = $soma / count($notas);

// Exibição dos resultados
echo "--- Relatório de Notas da Turma ---\n";
echo "Notas cadastradas: " . implode(", ", $notas) . "\n";
echo "Média da turma: " . number_format($mediaTurma, 2, ',', '.') . "\n";
echo "Maior nota: " . number_format($maiorNota, 1, ',', '.') . "\n";
echo "Menor nota: " . number_format($menorNota, 1, ',', '.') . "\n";
?>