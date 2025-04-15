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

$clientePF = new PessoaFisica("gab", "gab@gmail.com", 19, "571.931.358-30
 ");
?>

<pre><?=var_dump($clientePF)?></pre>
    
</body>
</html>