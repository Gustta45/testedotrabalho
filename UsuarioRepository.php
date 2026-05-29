<?php

require_once __DIR__ . '/Usuario.php';

class UsuarioRepository
{
    private string $arquivo;

    public function __construct(string $arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function todos(): array
    {
        if (!file_exists($this->arquivo)) {
            return [];
        }

        $conteudo = file_get_contents($this->arquivo);
        $dados = json_decode($conteudo, true);

        if (!is_array($dados)) {
            return [];
        }

        $usuarios = [];
        foreach ($dados as $item) {
            if (isset($item['usuario'], $item['senha'])) {
                $usuarios[] = new Usuario($item['usuario'], $item['senha']);
            }
        }

        return $usuarios;
    }

    public function findByUsuario(string $usuario): ?Usuario
    {
        foreach ($this->todos() as $user) {
            if ($user->getUsuario() === $usuario) {
                return $user;
            }
        }

        return null;
    }
}
