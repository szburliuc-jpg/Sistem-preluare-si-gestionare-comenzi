</main>

<footer class="site-footer">
    <div class="footer-in">
        <div>
            <h3><?= $numeSite ?></h3>
            <p>Mâncare gătită proaspăt, în fiecare zi. Comandați online și primiți totul cald, direct la ușă.</p>
        </div>
        <div>
            <h4>Navigare</h4>
            <?php foreach ($pagini as $nume => $link): ?>
                <a href="<?= $base . $link ?>"><?= $nume ?></a>
            <?php endforeach; ?>
        </div>
        <div>
            <h4>Contact</h4>
            <p>str. Exemplu 10, Chișinău</p>
            <p><a href="tel:<?= preg_replace('/\s+/', '', $telefon) ?>"><?= $telefon ?></a></p>
            <p>comenzi@restaurant.md</p>
        </div>
        <div>
            <h4>Program</h4>
            <p>Luni – Duminică</p>
            <p>10:00 – 22:00</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© <?= date('Y') ?> <?= $numeSite ?> | Versiunea 2.0</p>
    </div>
</footer>

<script src="<?= $base ?>script.js"></script>
</body>
</html>
