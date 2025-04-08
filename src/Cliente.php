<?php

class Cliente
{
    public string $nome;
    public int $idade;
    public string $email;

    public function definirDados($nome, $idade, $email)
    {
        $this->nome = $nome;  
        $this->idade = $idade;  
        $this->email = $email;  
    }

    public function exibirDados(): void
    {

    }

    public function verificarIdade(int $idade): bool
    {
        return true;
    }
}
