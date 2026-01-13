<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <title>QualiAuto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" href="IMG/favicon.ico">
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="p-3 bg-white border-bottom shadow-sm">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
                    <img src="IMG/favicon.png" alt="Logo" height="60">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-4">
                    <li><a href="viaturas.php" class="btn btn-outline-dark me-3">Viaturas</a></li>
                    <li><a href="financiamento.php" class="btn btn-outline-dark me-3">Financiamento</a></li>
                    <li><a href="contacto.php" class="btn btn-outline-dark me-3">Contacto</a></li>
                    <li><a href="sobre.php" class="btn btn-outline-dark me-3">Sobre Nós</a></li>
                </ul>

                <div class="text-end">
                    <?php if (isset($_SESSION['sessao_ativa'])): ?>
                        <span class="me-3 fw-bold text-muted">Olá, <?php echo $_SESSION['user_id']; ?></span>
                        <a href="dashboard.php" class="btn btn-outline-primary me-2"><i class="fas fa-gauge"></i>
                            Dashboard</a>
                        <a href="logout.php"><img src="IMG/logout.png" href="logout.php" width="45" height="45"></a>
                    <?php else: ?>
                        <a href="login.php"><img src="IMG/login.png" href="login.php" width="45" height="45"></img></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>