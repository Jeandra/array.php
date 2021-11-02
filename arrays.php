<?php

echo "Arrays <br>";


$cores = ["rosa", "azul", "verde","roxo", "branco", "preto", "lilás", "amarelo"];
$fruta = ["banana", "uva", "laranja", "morango", "jaca", "goiaba", "manga"];

$dados = [
    "nome" => ["Ana", "Pedro", "Alex", "Hugo"],
    "idade" => ["25", "37", "32", "14"],
];

$cardapio =[];
$cardapio [0] = "Tapioca";
$cardapio [1] = "Suco";
$cardapio [2] = "Doce";
$cardapio [3] = "Salgada";


echo "<pre>";

print_r($cores);
echo "<br>";
print_r($fruta);
echo "<br>";
print_r($dados);

echo "</pre>";

//escrevendo valores do array
echo "$cores[5] <br><hr>";