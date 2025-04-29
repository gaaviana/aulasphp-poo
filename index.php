<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 06</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 06</h1>
    <hr>


<?php
// sempre que trabalhamos com namespaces, será necesario especificar atraves do 'use' quais classes/enums/funções serão usadas

use MeuProjeto\Calculadora;
use MeuProjeto\Models\PessoaFisica;
use MeuProjeto\Models\PessoaJuridica;
 
require_once "vendor/autoload.php";

$clientePF = new PessoaFisica("gab", "gab@gmail.com", 19, "571.931.358-30
 ");

 $clientePJ = new PessoaJuridica("viana", "viana@gmail.com", "12.345.678/0001-00", 2010, "V.Airways");

$total = Calculadora::somar(5, 8);
echo $total;
?>

<!--  Cliente é uma classe abstrata, portanto, não podemos criar obejto a partir dela

$clienteGenreico = new Cliente("fulano", "fulano@gmail.com")
var_dump($clienteGenerico)
 -->
    <h2>Relatórios</h2>

    <!-- Acessamos as opç~es de Enum através do getSituação()->name -->
    <h3>PF</h3>
    <?=$clientePF->relatorio()?>
    <p><b>Situação: </b><?=$clientePF->getSituacao()->name?></p>

    <h3>PJ</h3>
    <?=$clientePJ->relatorio()?>
    <p><b>Situação: </b><?=$clientePJ->getSituacao()->name?></p>

</body>
</html>