<?php
session_start();

// Se ainda não existir lista de utilizadores na sessão, cria o Admin padrão.
if (!isset($_SESSION['lista_utilizadores'])) {
    $_SESSION['lista_utilizadores'] = [
        [
            'user' => 'admin',
            'pass' => password_hash('1234', PASSWORD_DEFAULT), 
            'perfil' => 'Administrador',
            // Token único de utilizador
            'token' => bin2hex(random_bytes(16))
        ]
    ];
}

// Token de Segurança para Formulários
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Função de Proteção de Páginas
function verificar_autenticacao() {
    if (!isset($_SESSION['sessao_ativa'])) {
        header("Location: login.php");
        exit();
    }
}
?>