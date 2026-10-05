<?php



$filmes = [
    ["Filme" => "Homem-Aranha", "Genero" => "Ação"],
    ["Filme" => "Todo mundo em panico 6", "Genero" => "comedia"],
    ["Filme" => "Your name", "Genero" => "Romance"],
    ["Filme" => "Interestelar", "Genero" => "Ficção Científica"]
];


echo "Filmes que vi em 2026:" . PHP_EOL;
echo $filmes[0]["Filme"] . " - " . $filmes[0]["Genero"] . PHP_EOL;
echo $filmes[1]["Filme"] . " - " . $filmes[1]["Genero"] . PHP_EOL;