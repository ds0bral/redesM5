<?php 
include 'header.php'; 
$msg_feedback = "";

// Validação PHP (Requisito: Validação lado do servidor)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    
    if (empty($nome) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg_feedback = "<div class='alert alert-danger'>Erro: Verifique os dados inseridos.</div>";
    } else {
        $msg_feedback = "<div class='alert alert-success'>Obrigado, $nome! Recebemos a sua mensagem.</div>";
    }
}
?>

<main class="container my-5">
    <h1>Fale Connosco</h1>
    <div class="row mt-4">
        <div class="col-md-6">
            <form id="form-contacto" method="POST" class="card p-4 shadow-sm">
                <?php echo $msg_feedback; ?>
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                    <small class="msgerror text-danger"></small>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <small class="msgerror text-danger"></small>
                </div>
                <div class="mb-3">
                    <label class="form-label">Assunto</label>
                    <select name="assunto" class="form-select">
                        <option value="info">Informações</option>
                        <option value="venda">Vendas</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensagem</label>
                    <textarea name="mensagem" class="form-control" rows="4"></textarea>
                </div>
                <button type="submit" id="btn-enviar" class="btn btn-danger w-100">Enviar Mensagem</button>
            </form>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
            <div class="card h-100 shadow-sm p-2">
                <iframe src="https://maps.google.com/maps?q=Viseu&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"></iframe>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>