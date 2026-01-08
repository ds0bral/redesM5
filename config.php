<?php
session_start();

// 1. Base de dados simulada em Array (Requisito: Arrays em PHP)
// Se ainda não existir lista de utilizadores na sessão, cria o Admin padrão.
if (!isset($_SESSION['lista_utilizadores'])) {
    $_SESSION['lista_utilizadores'] = [
        [
            'user' => 'admin',
            // Requisito: Passwords nunca em texto limpo (Algoritmos eficientes)
            'pass' => password_hash('1234', PASSWORD_DEFAULT), 
            'perfil' => 'Administrador',
            // Requisito: Token único de utilizador
            'token' => bin2hex(random_bytes(16))
        ]
    ];
}

// 2. Token de Segurança para Formulários (CSRF)
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// 3. Função de Proteção de Páginas
function verificar_autenticacao() {
    if (!isset($_SESSION['sessao_ativa'])) {
        header("Location: login.php");
        exit();
    }
}
?>