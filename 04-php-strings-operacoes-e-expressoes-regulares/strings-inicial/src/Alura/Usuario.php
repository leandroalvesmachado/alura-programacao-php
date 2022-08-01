<?php

namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $senha;
    private $genero;

    public function __construct(string $nome, string $senha, string $genero)
    {
        $this->setNomeSobrenome($nome);
        $this->validaSenha($senha);
        $this->adicionaTratamentoAoSobrenome($nome, $genero);
    }

    public function getNome(): string
    {
        return $this->nome;
    }


    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setNomeSobrenome(string $nome): void
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

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function getTratamento(): string
    {
        return $this->tratamento;
    }

    private function validaSenha(string $senha): void
    {
        $tamanhoSenha = strlen(trim($senha));

        if ($tamanhoSenha > 6) {
            $this->senha = $senha;
        } else {
            $this->senha = "Senha inválida";
        }
    }

    private function adicionaTratamentoAoSobrenome(string $nome, string $genero)
    {
        if ($genero === 'M') {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sr.', $nome, 1);
        }

        if ($genero === 'F') {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Srª.', $nome, 1);
        }
    }
}