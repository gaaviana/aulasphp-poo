<?php 
namespace MeuProjeto;
abstract class Calculadora 
{
    public static function somar(float $V1, float $V2):float {
        return $V1 + $V2;
    }
}