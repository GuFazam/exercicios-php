<?php
$numeros = [10, 20, 30, 40, 50];

$soma = 0;
$Contador = 0;

// Percorre os elementos do array e soma os valores
foreach ($numeros as $numero) {
    $soma += $numero;
    $Contador++;
}

// Calcula a média
if ($Contador > 0) {
    $media = $soma / $Contador;
    echo "A média dos números é: " . $media;
} 
else {
    echo "O array está vazio.";
}
?>