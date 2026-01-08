<?php 
include 'header.php'; 

// Requisito: Arrays em PHP para conteúdos
$stock_viaturas = [
    ['modelo' => 'TESLA - Modelo X', 'preco' => 35000, 'ano' => 2024],
    ['modelo' => 'TESLA - Model 3', 'preco' => 28500, 'ano' => 2023],
    ['modelo' => 'TESLA - Model Y', 'preco' => 19950, 'ano' => 2021],
    ['modelo' => 'TESLA - Model S', 'preco' => 42000, 'ano' => 2024]
];
?>

<main class="container my-5">
    <h1 class="mb-4 text-danger"><i class="fas fa-car"></i> O Nosso Stock</h1>

    <div class="table-responsive">
        <table class="table table-hover table-striped shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>Marca / Modelo</th>
                    <th>Preço</th>
                    <th>Ano</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($stock_viaturas as $carro): ?>
                <tr>
                    <td><?php echo $carro['modelo']; ?></td>
                    <td class="fw-bold text-success"><?php echo number_format($carro['preco'], 0, ',', '.'); ?> &euro;</td>
                    <td><span class="badge bg-secondary"><?php echo $carro['ano']; ?></span></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>