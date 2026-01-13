<?php 
include 'header.php'; 
verificar_autenticacao(); // Proteção do LOGIN
?>

<main class="container my-5">
    <div class="bg-white p-5 rounded shadow">
        <h1 class="text-danger mb-4">Painel de Controlo</h1>
        
        <div class="alert alert-success">
            Bem-vindo de volta, <strong><?php echo $_SESSION['user_id']; ?></strong>!
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-3 bg-light">
                    <h5><i class="fas fa-id-card"></i> O Teu Perfil</h5>
                    <p class="mb-1">Tipo de Conta: <span class="badge bg-primary"><?php echo $_SESSION['perfil']; ?></span></p>
                    <p class="mb-0 text-muted small">Token de Sessão: <?php echo $_SESSION['user_token']; ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 border-danger">
                    <h5><i class="fas fa-lock"></i> Segurança</h5>
                    <p>A tua sessão está ativa e protegida. A password está encriptada.</p>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h4>Ferramentas de Gestão</h4>
            <p>Se tiveres permissões de Admin, verás opções extra aqui.</p>
            <button class="btn btn-outline-secondary" disabled>Adicionar Viatura (Em breve)</button>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>