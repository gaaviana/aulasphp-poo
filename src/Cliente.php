<?php

class Cliente
{
    private string $nome;
    private int $idade;
    private string $email;

    // Métodos construct (sempre é executado automaticamente ao criar objeto)
    public function __construct(string $nome, int $idade, string $email)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setIdade($idade);

    }

    public function verificarIdade(): string
    {
        if ($this->idade< 18) {
            return "Menor de idade";
        } elseif ($this->idade < 60) {
            return "Adulto";
        } else {
            return "Idoso";
        }
    }

    public function setNome(string $nome):void 
    {
        
        $this->nome = $nome;
    }

    public function setIdade(int $idade):void 
    {
        if ($idade < 0) {
            throw new InvalidArgumentException("Idade não pode ser negativa");
        }

        $this->idade = $idade;
    }

    public function setEmail(string $email):void 
    {
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email invalido");
        }
        $this->email = $email;
    }


    // Métodos getters: responsaveis por acessar/ler os dados

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function getIdade(): int 
    {
        return $this->idade;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }
    
}
