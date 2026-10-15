<?php
// Header comun: se include pe toate paginile.
// $base = calea către rădăcina proiectului ('' sau '../'), $titlu = titlul paginii.
$base   = $base   ?? '';
$titlu  = $titlu  ?? 'Acasă';
$curent = basename($_SERVER['SCRIPT_NAME']);

$numeSite = 'Restaurant';   // <- schimbați aici numele restaurantului
$telefon  = '+373 22 000 000';

$pagini = [
    'Acasă'      => 'index.php',
    'Meniu'      => 'pagini/meniu.php',
    'Comenzi'    => 'pagini/comenzi.php',
    'Despre noi' => 'pagini/despre.php',
    'Contact'    => 'pagini/contact.php',
];
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titlu ?> | <?= $numeSite ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base ?>style.css">
</head>
<body>

<div class="topbar">
    <div class="topbar-in">
        <span>Livrare gratuită la comenzi peste 250 lei</span>
        <span class="topbar-right">
            <span>Zilnic 10:00 – 22:00</span>
            <a href="tel:<?= preg_replace('/\s+/', '', $telefon) ?>"><?= $telefon ?></a>
        </span>
    </div>
</div>

<header class="site-header">
    <div class="header-in">
        <button class="icon-btn menu-toggle" id="menuBtn" aria-label="Deschide meniul" aria-expanded="false">
            <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <a class="brand" href="<?= $base ?>index.php"><?= $numeSite ?></a>

        <nav class="main-nav" aria-label="Navigare principală">
            <?php foreach ($pagini as $nume => $link): ?>
                <a href="<?= $base . $link ?>" class="<?= basename($link) === $curent ? 'active' : '' ?>"><?= $nume ?></a>
            <?php endforeach; ?>
        </nav>

        <div class="header-actions">
            <a class="btn btn-small hide-mobile" href="<?= $base ?>pagini/meniu.php">Comandă acum</a>
            <a class="icon-btn" href="<?= $base ?>pagini/autentificare.php" aria-label="Autentificare">
                <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"/>
                </svg>
            </a>
        </div>
    </div>
</header>

<div class="overlay" id="overlay"></div>

<aside class="sidebar" id="sidebar" aria-hidden="true">
    <div class="sidebar-head">
        <span><?= $numeSite ?></span>
        <button class="icon-btn dark" id="closeBtn" aria-label="Închide meniul">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <path d="M6 6l12 12M18 6L6 18"/>
            </svg>
        </button>
    </div>
    <nav>
        <?php foreach ($pagini as $nume => $link): ?>
            <a href="<?= $base . $link ?>" class="<?= basename($link) === $curent ? 'active' : '' ?>"><?= $nume ?></a>
        <?php endforeach; ?>
    </nav>
    <a class="sidebar-phone" href="tel:<?= preg_replace('/\s+/', '', $telefon) ?>"><?= $telefon ?></a>
</aside>

<main>
