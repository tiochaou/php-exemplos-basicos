<?php
// Função para calcular o IMC
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

// Programa principal com valores de teste
$peso = (float) readline("Digite o peso em quilogramas (kg): ");
$altura = (float) readline("Digite a altura em metros (m): ");

// Chamada da função
$imc = calcularIMC($peso, $altura);

// Estrutura condicional para verificar a classificação
if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc < 25.0) {
    $classificacao = "Peso normal";
} elseif ($imc < 30.0) {
    $classificacao = "Sobrepeso";
} else {
    $classificacao = "Obesidade";
}

// Exibição dos resultados
echo "--- Resultado do Cálculo do IMC ---\n";
echo "Peso: " . number_format($peso, 1, ',', '.') . " kg\n";
echo "Altura: " . number_format($altura, 2, ',', '.') . " m\n";
echo "IMC calculado: " . number_format($imc, 2, ',', '.') . "\n";
echo "Classificação: " . $classificacao . "\n";
?>