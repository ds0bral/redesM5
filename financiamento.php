<?php include 'header.php'; ?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">Simulador de Financiamento</h1>
            <p class="text-muted">Calcule a sua mensalidade estimada.</p>

            <form id="form-financiamento" class="card p-4 shadow-sm bg-light">
                <div class="mb-3">
                    <label for="valor" class="form-label fw-bold">Valor da Viatura (€)</label>
                    <div class="input-group">
                        <span class="input-group-text">€</span>
                        <input type="number" id="valor" class="form-control" placeholder="25000">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="meses" class="form-label fw-bold">Prazo (meses)</label>
                    <input type="number" id="meses" class="form-control" placeholder="48">
                </div>
                <button type="button" id="btn-calcular" class="btn btn-danger w-100 fw-bold">
                    <i class="fas fa-calculator"></i> Calcular
                </button>
            </form>

            <div id="resultado-financiamento" class="mt-4 p-3 text-center fw-bold rounded border bg-white"></div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>