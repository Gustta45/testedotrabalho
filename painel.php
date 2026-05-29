<?php
session_start();

require_once __DIR__ . '/classes/Auth.php';
$auth = new Auth(new UsuarioRepository(__DIR__ . '/usuarios.json'));
$auth->requireLogin();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - Sistema de Gerenciamento</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav class="navbar">
    <div class="navbar-container">
        <a href="painel.php" class="navbar-brand">🏢 Gerenciamento</a>
        <div class="navbar-nav">
            <span style="color: #666; font-weight: 500;">👤 <?php echo htmlspecialchars($auth->getUsuarioLogado(), ENT_QUOTES, 'UTF-8'); ?></span>
            <a href="logout.php">Sair</a>
        </div>
    </div>
</nav>

<main>
    <div class="container">
        <div class="page-header">
            <h1>Bem-vindo, <?php echo htmlspecialchars($auth->getUsuarioLogado(), ENT_QUOTES, 'UTF-8'); ?>! 👋</h1>
            <p>Escolha uma opção para gerenciar seus recursos</p>
        </div>

        <!-- EQUIPAMENTOS -->
        <div class="section-list">
            <h2>📦 Equipamentos</h2>
            <ul>
                <li><a href="views/cadastrar_equipamento.php">➕ Cadastrar Novo Equipamento</a></li>
                <li><a href="views/listar_equipamentos.php">📋 Listar Todos os Equipamentos</a></li>
                <li><a href="views/emprestimo.php">📤 Gerenciar Empréstimos</a></li>
                <li><a href="views/reserva.php">🔖 Gerenciar Reservas</a></li>
            </ul>
        </div>

        <!-- FUNCIONÁRIOS -->
        <div class="section-list">
            <h2>👥 Funcionários</h2>
            <ul>
                <li><a href="views/cadastrar_funcionario.php">➕ Cadastrar Novo Funcionário</a></li>
                <li><a href="views/listar_funcionarios.php">📋 Listar Todos os Funcionários</a></li>
            </ul>
        </div>

        <!-- CLIENTES -->
        <div class="section-list">
            <h2>🤝 Clientes</h2>
            <ul>
                <li><a href="views/cadastrar_cliente.php">➕ Cadastrar Novo Cliente</a></li>
                <li><a href="views/listar_clientes.php">📋 Listar Todos os Clientes</a></li>
            </ul>
        </div>

        <!-- DASHBOARD -->
        <div class="dashboard-grid" style="margin-top: 2rem;">
            <div class="dashboard-card">
                <div style="font-size: 2rem;">📦</div>
                <h3>Equipamentos</h3>
                <p>Gerencie seu inventário</p>
                <a href="views/listar_equipamentos.php" class="btn btn-primary btn-block">Acessar</a>
            </div>

            <div class="dashboard-card">
                <div style="font-size: 2rem;">👥</div>
                <h3>Funcionários</h3>
                <p>Controle sua equipe</p>
                <a href="views/listar_funcionarios.php" class="btn btn-primary btn-block">Acessar</a>
            </div>

            <div class="dashboard-card">
                <div style="font-size: 2rem;">🤝</div>
                <h3>Clientes</h3>
                <p>Gerencie clientes</p>
                <a href="views/listar_clientes.php" class="btn btn-primary btn-block">Acessar</a>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>&copy; 2026 Sistema de Gerenciamento de Recursos</p>
    <p style="font-size: 0.85rem; color: #aaa;">Bem-vindo ao painel de administração</p>
</footer>

</body>
</html>