<?php

require_once __DIR__ . '/UsuarioRepository.php';

class Auth
{
    private UsuarioRepository $repository;

    public function __construct(UsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function login(string $usuario, string $senha): bool
    {
        $user = $this->repository->findByUsuario($usuario);

        if ($user === null) {
            return false;
        }

        if (!$user->verificarSenha($senha)) {
            return false;
        }

        $_SESSION['usuario'] = $user->getUsuario();
        return true;
    }

    public function isLogged(): bool
    {
        return isset($_SESSION['usuario']) && $_SESSION['usuario'] !== '';
    }

    public function requireLogin(): void
    {
        if (!$this->isLogged()) {
            header('Location: index.php');
            exit();
        }
    }

    public function logout(): void
    {
        session_destroy();
    }

    public function getUsuarioLogado(): ?string
    {
        return $_SESSION['usuario'] ?? null;
    }
}
