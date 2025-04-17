<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 04</h1>
    <hr>


<?php
require_once "src/Cliente.php"; // superClasse
require_once "src/PessoaFisica.php"; // SubClasse
require_once "src/Situacao.php"; // Enum
require_once "src/PessoaJuridica.php"; // subClasse

$clientePF = new PessoaFisica("gab", "gab@gmail.com", 19, "571.931.358-30
 ");

 $clientePJ = new PessoaJuridica("viana", "viana@gmail.com", "12.345.678/0001-00", 2010, "V.Airways")
?>

<pre><?=var_dump($clientePF)?></pre>
<pre><?=var_dump($clientePJ)?></pre>
    
</body>
</html>