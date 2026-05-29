<?php

class Funcionario
{
    private $id;
    private $nome;
    private $salario;
    private $cargo;
    private $email;

    public function __construct($id, $nome, $salario, $cargo, $email = '')
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'salario' => $this->salario,
            'cargo' => $this->cargo,
            'email' => $this->email
        ];
    }
}
