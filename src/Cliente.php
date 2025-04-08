<?php

class Animal
{
    public string $nome;
    public int $idade;
    public string $email;

    public function exibirDados(): void
    {

    }

    public function verificarIdade(int $idade): bool
    {
        return true;
    }
}
