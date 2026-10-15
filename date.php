<?php
// Datele meniului, folosite atât pe pagina principală cât și în Meniu.
// Fotografiile se află în img/photos/ (înlocuiți fișierele cu pozele voastre, păstrând numele).

$categorii = [
    'pizza'  => 'Pizza',
    'paste'  => 'Paste',
    'salate' => 'Salate',
    'supe'   => 'Supe',
];

// [categorie, nume, descriere, preț (lei), fotografie, popular?]
$produse = [
    ['pizza',  'Pizza Margherita',        'Sos de roșii, mozzarella, busuioc proaspăt',           50.00, 'pizza-margherita.jpg',  true],
    ['pizza',  'Pizza Pepperoni',         'Sos de roșii, mozzarella, salam pepperoni',            62.00, 'pizza-pepperoni.jpg',   true],
    ['pizza',  'Pizza Quattro Formaggi',  'Mozzarella, gorgonzola, parmezan, brânză de capră',    70.00, 'pizza-formaggi.jpg',    false],
    ['pizza',  'Pizza Diavola',           'Salam picant, ardei iute, mozzarella, măsline',        64.00, 'pizza-diavola.jpg',     false],
    ['paste',  'Paste Carbonara',         'Paste, ou, parmezan, guanciale',                       65.00, 'paste-carbonara.jpg',   true],
    ['paste',  'Paste Bolognese',         'Tagliatelle, sos de carne gătit încet, parmezan',      68.00, 'paste-bolognese.jpg',   false],
    ['paste',  'Paste cu pesto',          'Penne, pesto de busuioc, roșii cherry, parmezan',      58.00, 'paste-pesto.jpg',       false],
    ['salate', 'Salată Caesar',           'Pui, salată verde, crutoane, parmezan',                45.00, 'salata-caesar.jpg',     true],
    ['salate', 'Salată grecească',        'Roșii, castraveți, ardei, măsline, brânză feta',       42.00, 'salata-greceasca.jpg',  false],
    ['salate', 'Salată Caprese',          'Mozzarella, roșii, busuioc, ulei de măsline',          46.00, 'salata-caprese.jpg',    false],
    ['supe',   'Supă de pui',             'Supă cu tăiței de casă',                               30.00, 'supa-pui.jpg',          false],
    ['supe',   'Supă cremă de ciuperci',  'Ciuperci, smântână, crutoane de casă',                 34.00, 'supa-ciuperci.jpg',     false],
];
