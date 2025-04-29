# Exemplos de programação orientada a objetos usando php

## 07_autoload-de-classes-usando-composer

- Download e instalação do Composer na maquina
- Criação e configuração do `composer.json` para utilização do autoload de acordo com a `psr-4`
- Execução do comando `composer dumpautoload` via CLI para gerar a pasta `vendor` e o `autoload.php`
- Substituição de todos os `requires` individuais por um único apontando para o autoload
- Exemplo de uso de uma classe abstrata (que não pode ser instanciada) e método `static` (que pode ser acessado diretamente da classe, sem objeto). Exemplo:

```php
Calculadora::somar();
```

## 06_namespaces

- Reorganização virtual/lógica usando namespaces (espaços nomeados)
- Uso do `use` para simplificar (atalho) o acesso aos recursos do namespace

**Sem `use`**

```php
$objeto = new NomeDoNameSpace\NomeDaPasta\NomeDaClasse();
```

**Exemplo com `use`**

```php
use NomeDoNameSpace\NomeDaPasta;

$objeto = new NomeDaClasse;
```

- Evitar conflitos de nomes de classes

## 05_polimorfismo

- Métodos de mesma assinatura (nome, parâmetros, retorno) mas com comportamentos diferentes
- [Herança] Indicação de classes abstrata e final
- [Enumeração] Uso da propriedade `name` para acesso as opç~es do `Enum` 

## 04_herança-e-enumerações

- Superclasse e Subclasse
- Readequação de propriedades
- Ajustes nas chamadas de construct, usando o `parent` para acessar construtor da superclasse
-Uso de enumeração para criar um tipo de dado com valores customizados
- Alteração de visibilidade para protected em um método da superclasse, permitindo assim o acesso a partir da subclasse
- Organização das pastas e arquivos em `src`

## 03_ecapsulamento-e-metodo-construtor

- Implementação do método construtor obrigando a inicialização do objeto com dados provenientes de paramentros
- Chamada dos stters a partir do construtor
- Mudança da visibilidade dos setters para privado

## 02_encapsulamento-para-visibilidade

- Utilização de diferentes visibilidades (private e public)
- Controle de forma como os dados são acessados (getters) e modificados (setters)
- Com esta abordagem, podemos esconder detalhes de implementação da classe
- Podemos atribuit diferentes lógicas de negócio (validações, sanitizações etc)

## 01_estracao-usando-classes-atributos-metodos

- Pasta `src` para organização das classes
- Criação da classe `Cliente.php` *(sempre iniciando com letras maiusculas)*
    - Definição de atributos contendo:
        - tipo de visibilidade (nos exemplos, usamos `public`)
        - tipo de dados
        - nome do atributo
    - Definição de métodos contendo:
        - tipo de visibilidade (nos exemplos, usamos `public`)
        - nome do método
        - detalhes adicionais (parâmetros, tipo de retorno etc)
        - Uso do `$this` para acessar os recursos da classe
- Na `index.php`:
    - Uso do `require` para referenciar a classe `Cliente`
    - Criação dos objetos `$ClienteA` e `$ClienteB` a partir da classe usando `new Cliente()`
    - Atribuição de dados de forma direta aos atributos usndo `$nomeObjeto->atributo`
    - Chamanda de métodos através do objeto usando `$nomeObjeto->metodo()`