<?php
include 'header.php';
$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u_login = $_POST['user'];
    $p_login = $_POST['pass'];

    // Procura no array de utilizadores
    foreach ($_SESSION['lista_utilizadores'] as $utilizador) {
        // Verifica e compara a password escrita com o hash guardado
        if ($utilizador['user'] === $u_login && password_verify($p_login, $utilizador['pass'])) {
            $_SESSION['sessao_ativa'] = true;
            $_SESSION['user_id'] = $utilizador['user'];
            $_SESSION['perfil'] = $utilizador['perfil'];
            $_SESSION['user_token'] = $utilizador['token'];

            header("Location: dashboard.php");
            exit();
        }
    }
    $erro = "<div class='alert alert-danger'>Dados incorretos.</div>";
}
?>

<main class="container my-5 d-flex justify-content-center">
    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-3">Login</h3>
        <?php echo $erro; ?>
        <form method="POST">
            <div class="mb-1">
                <label class="form-label">Utilizador</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-dark w-100">Entrar</button>
        </form>
        <p class="text-center mt-3"><small>Ainda não tem conta? <a href="registo.php">Registe-se</a></small></p>
    </div>
</main>

<?php include 'footer.php'; ?>