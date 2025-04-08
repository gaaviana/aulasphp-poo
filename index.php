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

$clienteB->nome = "Viana";
$clienteB->idade = 22;
$clienteB->email = "viana@gmail.com";

?>
    <h2>Acessando/lendo os dados dos objetoss</h2>
    <h3>Cliente A</h3>
    <div>
        <?php
        $clienteA->exibirDados();
        ?>
    </div>
    <ul>
        <li><b>Idade: </b><?=$clienteA->idade?></li>
        <li><b>Email: </b><?=$clienteA->email?></li>
    </ul>

    <h3>Cliente B</h3>
    <div>
        <?php
        $clienteB->exibirDados();
        ?>
    </div>
    <ul>
        <li><b>Idade: </b><?=$clienteB->idade?></li>
        <li><b>Email: </b><?=$clienteB->email?></li>
    </ul>

    <h2>Testes de acesso aos recursos da classe através do objeto</h2>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>

    
</body>
</html>