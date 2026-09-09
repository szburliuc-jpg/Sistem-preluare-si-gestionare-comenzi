<?php

// Datele comenzii
$numarComanda = 101;
$numeClient = "Ion Popescu";
$produs = "Pizza";
$pret = 100.00;
$cantitate = 2;

// Constanta TVA
const TVA = 20;

// Calcule
$subtotal = $pret * $cantitate;
$valoareTVA = $subtotal * TVA / 100;
$total = $subtotal + $valoareTVA;

?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Comandă restaurant</title>

    <link rel="stylesheet" href="style.css">
</head> 

<body>

    <div class="container">

        <header>
            <h1>Restaurant</h1>
            <p>Sistem de preluare și gestionare a comenzilor</p>
        </header>


        <section class="card">

            <h2>Comanda #<?= $numarComanda ?></h2>

            <div class="info">

                <p>
                    <strong>Client:</strong>
                    <?= $numeClient ?>
                </p>

                <p>
                    <strong>Produs:</strong>
                    <?= $produs ?>
                </p>

                <p>
                    <strong>Preț:</strong>
                    <?= number_format($pret, 2) ?> lei
                </p>

                <p>
                    <strong>Cantitate:</strong>
                    <?= $cantitate ?>
                </p>

            </div>

        </section>


        <section class="card">

            <h2>Calculul comenzii</h2>

            <div class="calculation">

                <div>
                    <span>Subtotal</span>
                    <span><?= number_format($subtotal, 2) ?> lei</span>
                </div>

                <div>
                    <span>TVA (<?= TVA ?>%)</span>
                    <span><?= number_format($valoareTVA, 2) ?> lei</span>
                </div>

                <hr>

                <div class="total">
                    <span>Total</span>
                    <span><?= number_format($total, 2) ?> lei</span>
                </div>

            </div>

        </section>


        <footer>
            <p>Versiunea 1.0</p>
        </footer>

    </div>

</body>

</html>