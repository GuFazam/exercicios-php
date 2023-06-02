<?php

// Obtém o valor do campo de números do formulário
$numeros = $_POST["numeros"] ?? ''; //impede que apareça uma mensagem de aviso na tela por iniciar por esse arquivo ao invés do form

// Separa os números em um array usando a função explode()
$arrayNumeros = explode(",", $numeros); //explode() esta separando os números em um array, utilizando a vírgula como delimitador.

// Inicializa a variável para armazenar a soma
$soma = array_sum($arrayNumeros); //array_sum é usada para calcular a soma dos números diretamente a partir do array $arrayNumeros.

// Exibe a soma dos números
echo "A soma dos números é: $soma";

?>
