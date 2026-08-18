<?php 
//leitura e display do preco e quantidade
 $preco = (float) readline("digite o valor do produto: ");
 $quantidade = (int) readline("digite a quantidade de pridutos: ");

//calculo do valor sem o desconto
 $valortotal = $preco * $quantidade ; 

//aplicando o desconto de 10% 
    if($valortotal >=200.00) {
        $desconto = $valortotal * 0.10;
        $valorfinal = $valortotal - $desconto;
        $mensagemdesconto = "desconto de 10% aplicado! (R$ " . number_format($desconto, 2, ',', '.') . ")";
} else {$valorfinal = $valortotal;
    $mensagemdesconto = "Sem desconto (valor total menor que R$ 200,00)";
}
    
// Exibicao dos resultados
echo "\n--- Resumo da Compra ---\n";
echo "Valor total inicial: R$ " . number_format($valortotal, 2, ',', '.') . "\n";
echo "Status do desconto: " . $mensagemdesconto . "\n";
echo "Valor final a pagar: R$ " . number_format($valorfinal, 2, ',', '.') . "\n";
?>