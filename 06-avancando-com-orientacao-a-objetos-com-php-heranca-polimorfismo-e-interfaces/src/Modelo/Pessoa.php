<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    // private $nome;
    // private $cpf;

    // modificador de acesso que permite a classe Pai e filhas acessar o atributo
    // podemos acessar atributos e métodos da classe base se eles forem definidos como protected
    protected $nome;
    protected $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}