<?php

class Cliente
{
    private string $nome;
    private string $email;
    private Situacao $situacao;

    // Métodos construct (sempre é executado automaticamente ao criar objeto)

    // Ddefinindo a situação INATIVO como vakor padrão para o parâmetro situacao no constrututor
    public function __construct(string $nome, string $email, Situacao $situacao = Situacao::INATIVO)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSituacao($situacao);
    }

    public function relatorio():string {
        return 
        "<div>
            <h4> {$this->getNome()} </h4>
            <p><b>Contato: </b>{$this->getEmail()}</p>
        </div>";
    }

    // Visibilidade protegida: desta forma, este método pode ser usadi aqui em cliente (superCLasse) e também nas subclasses. O acesso externo (no nosso caso, em index) continua sendo bloqueado
    protected function setSituacao(Situacao $situacao):void {
        $this->situacao = $situacao;
    }

    public function getSituacao():Situacao {
        return $this->situacao;
    }

    public function setNome(string $nome):void 
    {
        
        $this->nome = $nome;
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


    public function getEmail(): string 
    {
        return $this->email;
    }
    
}
