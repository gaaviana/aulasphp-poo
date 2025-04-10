<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 02</h1>
    <hr>


<?php
require_once "src/Cliente.php";

$clienteA = new Cliente();
$clienteB = new Cliente();

$clienteA->setNome("Gabriel");
$clienteA->setIdade(1);
$clienteA->setEmail("Gabriel@gmail.com");

$clienteB->setNome("Viana");
$clienteB->setIdade(22);
$clienteB->setEmail("viana@gmail.com");

?>
    <h2>Acessando/lendo os dados dos objetoss</h2>
    <ul>
        <li><b>Nome: </b><?=$clienteA->getNome()?></li>
        <li><b>Idade: </b><?=$clienteA->getIdade()?></li>
        <li><b>Email: </b><?=$clienteA->getEmail()?></li>
    </ul>

    <ul>
        <li><b>Nome: </b><?=$clienteB->getNome()?></li>
        <li><b>Idade: </b><?=$clienteB->getIdade()?></li>
        <li><b>Email: </b><?=$clienteB->getEmail()?></li>
    </ul>

    <h2>Testes de acesso aos recursos da classe através do objeto</h2>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>

    
</body>
</html>