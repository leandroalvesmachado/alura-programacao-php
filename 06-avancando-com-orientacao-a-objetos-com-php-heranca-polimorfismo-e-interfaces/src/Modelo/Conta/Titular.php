<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    // private Endereco $endereco; // php >= 7.4
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        // chamando __construct da classe base, no caso Pessoa
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
