<?php
session_start();

require_once __DIR__ . '/classes/Auth.php';
$auth = new Auth(new UsuarioRepository(__DIR__ . '/usuarios.json'));
$auth->logout();

header('Location: login.php?deslogado=1');
exit();
?>