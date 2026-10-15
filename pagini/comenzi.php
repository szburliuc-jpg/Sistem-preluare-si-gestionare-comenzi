<?php
$base  = '../';
$titlu = 'Comenzi';

const TVA = 20;

// Comenzile de test (din lucrarea anterioară)
$teste = [
    ["tip" => "Comandă mică",  "numarComanda" => 101, "numeClient" => "Ion Popescu",   "produs" => "Pizza", "pret" => 50.00,  "cantitate" => 1],
    ["tip" => "Comandă medie", "numarComanda" => 102, "numeClient" => "Maria Ionescu", "produs" => "Pizza", "pret" => 100.00, "cantitate" => 2],
    ["tip" => "Comandă mare",  "numarComanda" => 103, "numeClient" => "Andrei Popa",   "produs" => "Pizza", "pret" => 150.00, "cantitate" => 4],
];

require '../header.php';
?>

<div class="page-banner">
    <h1>Comenzi</h1>
    <p>Totalul fiecărei comenzi, cu TVA inclus</p>
</div>

<section class="section wrap orders">

<?php foreach ($teste as $test):
    $subtotal   = $test["pret"] * $test["cantitate"];
    $valoareTVA = $subtotal * TVA / 100;
    $total      = $subtotal + $valoareTVA;
?>
    <section class="card">
        <h2><?= $test["tip"] ?></h2>

        <div class="info">
            <p><strong>Comanda:</strong> #<?= $test["numarComanda"] ?></p>
            <p><strong>Client:</strong> <?= $test["numeClient"] ?></p>
            <p><strong>Produs:</strong> <?= $test["produs"] ?></p>
            <p><strong>Preț:</strong> <?= number_format($test["pret"], 2) ?> lei</p>
            <p><strong>Cantitate:</strong> <?= $test["cantitate"] ?></p>
        </div>

        <div class="calculation">
            <h3>Calculul comenzii</h3>
            <div><span>Subtotal</span><span><?= number_format($subtotal, 2) ?> lei</span></div>
            <div><span>TVA (<?= TVA ?>%)</span><span><?= number_format($valoareTVA, 2) ?> lei</span></div>
            <hr>
            <div class="total"><span>Total</span><span><?= number_format($total, 2) ?> lei</span></div>
        </div>
    </section>
<?php endforeach; ?>
</section>

<?php require '../footer.php'; ?>
