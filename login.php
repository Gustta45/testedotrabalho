<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Gerenciamento</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="login-page">

<div class="login-wrapper">
    <div class="login-header">
        <h1>🔐 Login</h1>
        <p>Acesse o sistema de gerenciamento</p>
    </div>

    <?php 
    session_start();
    require_once __DIR__ . '/classes/Auth.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = trim($_POST['usuario'] ?? '');
        $senha = trim($_POST['senha'] ?? '');
        $auth = new Auth(new UsuarioRepository(__DIR__ . '/usuarios.json'));

        if ($auth->login($usuario, $senha)) {
            header('Location: painel.php');
            exit();
        }

        header('Location: login.php?erro=1');
        exit();
    }
    ?>

    <?php if (isset($_GET['erro']) && $_GET['erro'] === '1'): ?>
        <div class="alert alert-danger">
            <strong>Erro:</strong> Usuário ou senha inválidos. Tente novamente.
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['deslogado']) && $_GET['deslogado'] === '1'): ?>
        <div class="alert alert-success">
            <strong>Sucesso:</strong> Você foi deslogado com sucesso.
        </div>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </form>

    <div style="margin-top: 1.5rem; text-align: center;">
        <p style="color: #666; font-size: 0.9rem;">Credenciais de teste:</p>
        <p style="font-size: 0.85rem; color: #999;">
            Usuário: <strong>admin</strong> | Senha: <strong>admin123</strong>
        </p>
    </div>

    <div style="margin-top: 1.5rem; text-align: center; border-top: 1px solid #ddd; padding-top: 1rem;">
        <a href="index.php" style="color: #666; text-decoration: none;">← Voltar ao início</a>
    </div>
</div>

</body>
</html>