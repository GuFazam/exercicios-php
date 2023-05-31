<?php 
$aluno = array( //isso é um array associativo
    "nome" => "Gustavo", // '=>' está associando o valor "Gustavo" a chave nome
    "idade" => 18,
    "nota" => 7.5
); //é bem parecido com sql

echo "Nome: " . $aluno["nome"] . "<br>";
echo "Idade: " . $aluno["idade"] . "<br>";
echo "Nota: " . $aluno["nota"];

?>