<?php

$titlu = 'Acasă';
require 'date.php';

// Imaginile caruselului: [fotografie, titlu, descriere]
$slides = [
    ['hero-pizza.jpg',  'Pizza cu cuptor pe lemne',  'Aluat făcut zilnic, ingrediente proaspete'],
    ['hero-paste.jpg',  'Paste făcute în casă',      'Sosuri gătite încet, după rețete tradiționale'],
    ['hero-salate.jpg', 'Salate de sezon',           'Legume de la producători locali'],
];

require 'header.php';
?>

<section class="carousel" id="carousel" aria-label="Preparate recomandate">
    <div class="slides" id="slides">
        <?php foreach ($slides as $i => [$src, $titluSlide, $descriere]): ?>
            <figure class="slide <?= $i === 0 ? 'active' : '' ?>">
                <img src="img/photos/<?= $src ?>" alt="<?= $titluSlide ?>">
                <figcaption>
                    <h1><?= $titluSlide ?></h1>
                    <p><?= $descriere ?></p>
                    <a class="btn" href="pagini/meniu.php">Vezi meniul</a>
                </figcaption>
            </figure>
            
        <?php endforeach; ?>
    </div>

    <button class="arrow prev" id="prev" aria-label="Imaginea anterioară">&#10094;</button>
    <button class="arrow next" id="next" aria-label="Imaginea următoare">&#10095;</button>

    <div class="dots" id="dots">
        <?php foreach ($slides as $i => $s): ?>
            <button class="dot <?= $i === 0 ? 'active' : '' ?>" data-index="<?= $i ?>" aria-label="Imaginea <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
    </div>
</section>

<section class="section wrap">
    <div class="section-head">
        <h2>Bine ați venit!</h2>
        <p>Comandați online din meniul nostru și primiți mâncarea caldă, direct la ușă.</p>
    </div>

    <div class="cat-grid">
        <?php
        $fotoCategorie = ['pizza' => 'pizza-margherita.jpg', 'paste' => 'paste-carbonara.jpg', 'salate' => 'salata-caesar.jpg', 'supe' => 'supa-ciuperci.jpg'];
        foreach ($categorii as $cheie => $numeCat): ?>
            <a class="cat-tile" href="pagini/meniu.php?cat=<?= $cheie ?>">
                <img src="img/photos/<?= $fotoCategorie[$cheie] ?>" alt="<?= $numeCat ?>" loading="lazy">
                <span><?= $numeCat ?></span>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<section class="section alt">
    <div class="wrap">
        <div class="section-head">
            <h2>Cele mai populare</h2>
            <p>Preparatele pe care clienții noștri le comandă cel mai des.</p>
        </div>

        <div class="product-grid">
            <?php foreach ($produse as [$cat, $nume, $descriere, $pret, $foto, $popular]):
                if (!$popular) continue; ?>
                <article class="product">
                    <img src="img/photos/<?= $foto ?>" alt="<?= $nume ?>" loading="lazy">
                    <div class="product-body">
                        <h3><?= $nume ?></h3>
                        <p><?= $descriere ?></p>
                        <div class="product-foot">
                            <span class="pret"><?= number_format($pret, 2) ?> lei</span>
                            <a class="btn btn-small" href="pagini/comenzi.php">Comandă</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section wrap">
    <div class="section-head">
        <h2>Cum comandați</h2>
    </div>
    <div class="steps">
        <div class="step">
            <span class="step-nr">1</span>
            <h3>Alegeți</h3>
            <p>Alegeți preparatele din pagina <a href="pagini/meniu.php">Meniu</a>.</p>
        </div>
        <div class="step">
            <span class="step-nr">2</span>
            <h3>Trimiteți</h3>
            <p>Trimiteți comanda, iar noi o preluăm imediat.</p>
        </div>
        <div class="step">
            <span class="step-nr">3</span>
            <h3>Urmăriți</h3>
            <p>Urmăriți totalul și TVA în pagina <a href="pagini/comenzi.php">Comenzi</a>.</p>
        </div>
    </div>
</section>

<?php require 'footer.php'; ?>


