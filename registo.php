<?php
include 'header.php';
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação de Token CSRF (Segurança)
    if (!isset($_POST['csrf']) || $_POST['csrf'] !== $_SESSION['csrf_token']) {
        die("Erro de segurança: Token inválido.");
    }

    $novo_user = $_POST['user'];
    $nova_pass = $_POST['pass'];

    $erro = false;

    // Adiciona ao array na sessão com Password Criptografada (Hash)
    foreach ($_SESSION['lista_utilizadores'] as $utilizador) {
        // password_verify compara a pass escrita com o hash guardado
        if ($utilizador['user'] === $novo_user) {
            $msg = "<div class='alert alert-danger'>O nome de utilizador já existe.</div>";
            $erro = true;
            break;
        }
    }

    if (!$erro) {
        $_SESSION['lista_utilizadores'][] = [
            'user' => $novo_user,
            'pass' => password_hash($nova_pass, PASSWORD_DEFAULT),
            'perfil' => 'Cliente',
            'token' => bin2hex(random_bytes(16))
        ];

        $msg = "<div class='alert alert-success'>Registo efetuado com sucesso! <a href='login.php'>Faça Login</a>.</div>";
    }
}
?>

<main class="container my-5 d-flex justify-content-center">
    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-3">Criar Conta</h3>
        <?php echo $msg; ?>
        <form method="POST">
            <input type="hidden" name="csrf" value="<?php echo $_SESSION['csrf_token']; ?>">
            <div class="mb-3">
                <label class="form-label">Utilizador</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-danger w-100">Registar</button>
        </form>
        <p class="text-center mt-3"><small>Já tem conta? <a href="login.php">Login</a></small></p>
    </div>
</main>

<?php include 'footer.php'; ?>