<?php

namespace App\Alura;

class Contato
{
    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        if ($this->validaEmail($email) !== false) {
            $this->setEmail($email);
        } else {
            $this->setEmail("E-mail inválido");
        }

        $this->endereco = $endereco;
        $this->cep = $cep;

        if ($this->validaTelefone($telefone)) {
            $this->setTelefone($telefone);
        } else {
            $this->setTelefone("Telefone inválido");
        }
    }

    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, "@");

        if ($posicaoArroba === false) {
            return "Usuário inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getEnderecoCep(): string
    { 
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    private function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    private function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function validaTelefone(string $telefone): int
    {
        //6455-7546
        return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
    }
}