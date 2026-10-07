<?php

$frutas = ["banana", "maçã", "uva"];

foreach ($frutas as $i => $fruta) {
    echo "$i -> ". strtoupper($fruta) . "<br>";
}

$produto = [
    "nome" => "Camiseta",
    "preco" => 12.99
];

echo "Nome: " . $produto["nome"] . " Preço " . $produto["preco"] . "<br>";
$frutas[] = "Peperoni";
echo "Fruta: " . $frutas[3];


?>