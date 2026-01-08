<?php include 'header.php'; ?>

<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-danger">Bem-vindo à QualiAuto</h1>
        <p class="lead text-muted">Conheça os nossos destaques da semana.</p>
    </div>

    <section id="galeria-destaques" class="row g-0">
        <div class="col-md-3">
            <div class="item-galeria">
                <img src="IMG/y 24.png" class="card-img-top" alt="Model Y">
                <div class="card-body text-center bg-light">
                    <p class="card-text fw-bold">TESLA Model Y (2024)</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item-galeria">
                <img src="IMG/y 23.png" class="card-img-top" alt="Model Y">
                <div class="card-body text-center bg-light">
                    <p class="card-text fw-bold">TESLA Model Y (2023)</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item-galeria">
                <img src="IMG/3.png" class="card-img-top" alt="Model 3">
                <div class="card-body text-center bg-light">
                    <p class="card-text fw-bold">TESLA Model 3 (Usado)</p>
                </div>
            </div>
        </div>
    </section>

    <section id="lancamento" class="mt-5 p-5 bg-light rounded-3 text-center border">
        <h2 class="text-danger"><i class="fas fa-rocket"></i> Próximo Grande Lançamento</h2>
        <div id="contador" class="display-5 fw-bold mt-3">A carregar...</div>
    </section>
</main>

<?php include 'footer.php'; ?>