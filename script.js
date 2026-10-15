// ===== Meniul lateral =====
const menuBtn = document.getElementById('menuBtn');
const closeBtn = document.getElementById('closeBtn');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');

function setMenu(open) {
    sidebar.classList.toggle('open', open);
    overlay.classList.toggle('show', open);
    menuBtn.setAttribute('aria-expanded', open);
    sidebar.setAttribute('aria-hidden', !open);
}

menuBtn.addEventListener('click', () => setMenu(true));
closeBtn.addEventListener('click', () => setMenu(false));
overlay.addEventListener('click', () => setMenu(false));
document.addEventListener('keydown', e => { if (e.key === 'Escape') setMenu(false); });

// ===== Caruselul (doar pe pagina principală) =====
const carousel = document.getElementById('carousel');

if (carousel) {
    const slides = carousel.querySelectorAll('.slide');
    const dots = carousel.querySelectorAll('.dot');
    const track = document.getElementById('slides');
    let current = 0;
    let timer;

    function show(i) {
        current = (i + slides.length) % slides.length;
        track.style.transform = `translateX(-${current * 100}%)`;
        slides.forEach((s, n) => s.classList.toggle('active', n === current));
        dots.forEach((d, n) => d.classList.toggle('active', n === current));
    }

    function autoplay() {
        clearInterval(timer);
        timer = setInterval(() => show(current + 1), 5000);
    }

    document.getElementById('prev').addEventListener('click', () => { show(current - 1); autoplay(); });
    document.getElementById('next').addEventListener('click', () => { show(current + 1); autoplay(); });
    dots.forEach(d => d.addEventListener('click', () => { show(Number(d.dataset.index)); autoplay(); }));

    // Glisare cu degetul pe telefon
    let startX = 0;
    carousel.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
    carousel.addEventListener('touchend', e => {
        const diff = e.changedTouches[0].clientX - startX;
        if (Math.abs(diff) > 50) { show(current + (diff < 0 ? 1 : -1)); autoplay(); }
    });

    autoplay();
}

// ===== Filtrarea meniului pe categorii (doar pe pagina Meniu) =====
const filtre = document.querySelectorAll('.filter');

if (filtre.length) {
    const produse = document.querySelectorAll('#produse .product');

    function filtreaza(cat) {
        filtre.forEach(f => f.classList.toggle('active', f.dataset.cat === cat));
        produse.forEach(p => { p.hidden = cat !== 'toate' && p.dataset.cat !== cat; });
    }

    filtre.forEach(f => f.addEventListener('click', () => filtreaza(f.dataset.cat)));

    // /meniu.php?cat=pizza deschide direct categoria
    const cerut = new URLSearchParams(location.search).get('cat');
    if (cerut && [...filtre].some(f => f.dataset.cat === cerut)) filtreaza(cerut);
}

// ===== Formular demo: fără verificare =====
document.querySelectorAll('form[data-demo]').forEach(f =>
    f.addEventListener('submit', e => e.preventDefault())
);
