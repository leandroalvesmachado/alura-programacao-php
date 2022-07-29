<?php

namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobrenome;

    public function __construct(string $nome)
    {
        // no terceiro parametro do explode, você informa a quantidade maxima de partes que a string será "quebrada"
        $nomeSobrenome = explode(" ", $nome, 2);

        if ($nomeSobrenome[0] === "") {
            $this->nome = "Nome inválido";
        } else {
            $this->nome = $nomeSobrenome[0];
        }

        if ($nomeSobrenome[1] === null) {
            $this->sobrenome = "Sobrenome inválido";
        } else {
            $this->sobrenome = $nomeSobrenome[1];
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }


    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }
}