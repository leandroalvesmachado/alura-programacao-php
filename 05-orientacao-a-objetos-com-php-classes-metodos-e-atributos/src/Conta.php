<?php

class Conta
{
    // public $cpfTitular;
    // public $nomeTitular;
    // public $saldo = 0;

    // somente a classe acessa seus atributos (private)
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;

    public function sacar(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}