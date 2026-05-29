<?php

class Usuario
{
    private string $usuario;
    private string $senha;

    public function __construct(string $usuario, string $senha)
    {
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function getUsuario(): string
    {
        return $this->usuario;
    }

    public function verificarSenha(string $senha): bool
    {
        return $this->senha === $senha;
    }
}
