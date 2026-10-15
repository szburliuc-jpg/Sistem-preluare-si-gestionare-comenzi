<?php
$base  = '../';
$titlu = 'Autentificare';
require '../header.php';
?>

<div class="page-banner">
    <h1>Autentificare</h1>
    <p>Intrați în contul dvs. pentru a comanda mai repede</p>
</div>

<section class="section wrap narrow">
    <div class="card">
        <!-- Doar interfața: datele nu sunt verificate în această lucrare -->
        <form class="login-form" data-demo>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="nume@exemplu.md" required>

            <label for="parola">Parolă</label>
            <input type="password" id="parola" name="parola" placeholder="Introduceți parola" required>

            <button type="submit" class="btn">Conectare</button>
        </form>
    </div>
</section>

<?php require '../footer.php'; ?>
