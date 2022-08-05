<?php

class Endereco
{
    // php >= 7.4
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct($cidade, $bairro, $rua, $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }
}