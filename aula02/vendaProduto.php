<?php

define("LOJA", "Tech Point");

// 2. Variáveis de dados
$produto = "Mouse Gamer";
$preco = 89.90; // Float
$quantidade = 2; // Int

// 3. Operação Aritmética
$total = $preco * $quantidade;

// 4. Saída de dados (Usando aspas duplas para interpretar as variáveis)
echo "--- " . LOJA . " ---<br>";
echo "Produto: $produto <br>";
echo "Quantidade: $quantidade <br>";
echo "Valor Total: R$ $total";



/*

define("GAMES", "League of Legends");

$skins = "Skins";
$valor = 2.20;
$quantidade = 22;

$totalVendido = ($valor * $quantidade);

echo "A loja se chama ".GAMES."
o nome do produto  é $skins 
e o valor total é $totalVendido";

*/


?>