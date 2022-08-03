<?php

class Conta
{
    // public $cpfTitular;
    // public $nomeTitular;
    // public $saldo = 0;

    // somente a classe acessa seus atributos (private)
    // private $cpfTitular;
    // private $nomeTitular;
    // private $saldo = 0;
    // private $saldo;
    // public static $numeroDeContas = 0;
    // private static $numeroDeContas = 0;


    // após a criação da classe titular
    private $titular; // chamado de composição de objetos (vimos um objeto sendo formado por outro objeto)
    // uma conta tem uma instância do titular
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        // Conta::$numeroDeContas++;

        // self = chamando classe atual
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        // if (self::$numeroDeContas > 2) {
        //     echo "Há mais de uma conta ativa";
        // }
        self::$numeroDeContas--;
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

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }


    public static function recuperaNumeroDeContas(): int
    {
        // return Conta::$numeroDeContas;
        return self::$numeroDeContas;
    }
}