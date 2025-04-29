<?php 
namespace MeuProjeto\Models;
// Usamos o 'use' para indicar a utilização de outras classes/enums que temos
use MeuProjeto\Enums\Situacao;


final class PessoaJuridica extends Cliente 
{
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;

    public function __construct(string $nome, string $email, string $cnpj, int $anoFundacao, string $nomeFantasia)
    {
        parent::__construct($nome, $email);

        $this->setCnpj($cnpj);
        $this->setAnoFundacao($anoFundacao);
        $this->setNomeFantasia($nomeFantasia);

        // como ométodo foi definido na superclasse como protected, agora é possivel usá-lo para mudar a situação de PJ
        $this->setSituacao(Situacao::PENDENTE);
    }

    // Método polimorfico, ou seja, ele sobreescreve o método originalmente criado na superclasse.
    // Atenção: os métodos devem ter a mesma assinatura (nome, parâmetros e retorno)
    public function relatorio(): string
    {
        return 
        "<div>"
            .parent::relatorio().
            "<p><b>Nome Fantasia: </b>{$this->getNomeFantasia()}</p>
            <p><b>CNPJ: </b>{$this->getCnpj()}</p>
        </div>
        ";
    }

    private function setCnpj(string $cnpj):void {$this->cnpj = $cnpj;}
    private function setAnoFundacao(int $ano):void {$this->anoFundacao = $ano;}
    private function setNomeFantasia(string $nome):void {$this->nomeFantasia = $nome;}

    public function getCnpj():string {return $this->cnpj;}
    public function getAnoFundacao():int {return $this->anoFundacao;}
    public function getNomeFantasia():string {return $this->nomeFantasia;}
}