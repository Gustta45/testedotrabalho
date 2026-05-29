<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav class="navbar">
    <div class="navbar-container">
        <a href="index.php" class="navbar-brand">Gerenciamento</a>
        <div class="navbar-nav">
            <a href="login.php">Entrar</a>
        </div>
    </div>
</nav>

<main>
    <div class="container">
        <section class="page-header text-center">
            <h1>Bem-vindo</h1>
            <p>Gerencie equipamentos, funcionários e clientes em um só lugar.</p>
        </section>

        <section class="dashboard-grid">
            <article class="dashboard-card">
                <div class="card-icon">📦</div>
                <h3>Equipamentos</h3>
                <p>Cadastro e controle de estoque.</p>
            </article>

            <article class="dashboard-card">
                <div class="card-icon">👥</div>
                <h3>Funcionários</h3>
                <p>Registre equipes e cargos.</p>
            </article>

            <article class="dashboard-card">
                <div class="card-icon">🤝</div>
                <h3>Clientes</h3>
                <p>Controle seus clientes facilmente.</p>
            </article>

            <article class="dashboard-card">
                <div class="card-icon">📋</div>
                <h3>Empréstimos</h3>
                <p>Registre saídas de equipamentos.</p>
            </article>

            <article class="dashboard-card">
                <div class="card-icon">🔖</div>
                <h3>Reservas</h3>
                <p>Organize reservas de equipamentos.</p>
            </article>
        </section>

        <section class="panel text-center">
            <h2>Entrar no sistema</h2>
            <p>Use a conta de teste para acessar todas as páginas.</p>
            <div class="login-info">
                <strong>Usuário:</strong> admin | <strong>Senha:</strong> admin123
            </div>
            <a href="login.php" class="btn btn-primary">Entrar</a>
        </section>
    </div>
</main>

<footer>
    <p>&copy; 2026 Sistema de Gerenciamento</p>
    <p class="small-text">PHP + JSON</p>
</footer>

</body>
</html>