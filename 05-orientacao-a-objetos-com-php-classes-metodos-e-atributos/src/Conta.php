<?php

class Conta
{
    // public $cpfTitular;
    // public $nomeTitular;
    // public $saldo = 0;

    // somente a classe acessa seus atributos (private)
    private $cpfTitular;
    private $nomeTitular;
    // private $saldo = 0;
    private $saldo;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    public function saca(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->saldo -= $valorSacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    // public function defineCpfTitular(string $cpf): void
    // {
    //     $this->cpfTitular = $cpf;
    // }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    // public function defineNomeTitular(string $nome): void
    // {
    //     $this->nomeTitular = $nome;
    // }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }
}