<?php
$base  = '../';
$titlu = 'Meniu';
require '../date.php';
require '../header.php';
?>

<div class="page-banner">
    <h1>Meniu</h1>
    <p>Alegeți dintre preparatele noastre gătite proaspăt</p>
</div>

<section class="section wrap">
    <div class="filters" id="filters">
        <button class="filter active" data-cat="toate">Toate</button>
        <?php foreach ($categorii as $cheie => $numeCat): ?>
            <button class="filter" data-cat="<?= $cheie ?>"><?= $numeCat ?></button>
        <?php endforeach; ?>
    </div>

    <div class="product-grid" id="produse">
        <?php foreach ($produse as [$cat, $nume, $descriere, $pret, $foto, $popular]): ?>
            <article class="product" data-cat="<?= $cat ?>">
                <img src="../img/photos/<?= $foto ?>" alt="<?= $nume ?>" loading="lazy">
                <div class="product-body">
                    <h3><?= $nume ?></h3>
                    <p><?= $descriere ?></p>
                    <div class="product-foot">
                        <span class="pret"><?= number_format($pret, 2) ?> lei</span>
                        <a class="btn btn-small" href="comenzi.php">Comandă</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php require '../footer.php'; ?>
