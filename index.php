<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 01</h1>
    <hr>


<?php
// Carregando/importando a classe
require_once "src/Cliente.php";

$clienteA = new Cliente();
$clienteB = new Cliente();

$clienteA->nome = "Gabriel";
$clienteA->idade = 18;
$clienteA->email = "Gabriel@gmail.com";
?>

    <h2>Testes de acesso aos recursos da classe através do objeto</h2>
    <pre><?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>