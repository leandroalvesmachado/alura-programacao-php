<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    // php >= 7.4
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        // chamando __construct da classe base, no caso Pessoa
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
}