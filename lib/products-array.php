<?php

/**
 *@return array 
 */
function allProducts() {
    $arr=array(
        [
            "id" => 11,
            "title" => "NOV NOV NOV",
            "description" => "Prodajem dobro očuvan auto, malo prešao, kao nov!",
            "img" => "public/theme/img/products/photo-of-corroded-vintage-white-and-red-sedan-on-brown-grass-1089425.jpg",
            "price" => 4850,
            "category" => "cars",
            "brand" => "car",
            "available" => true
        ],
        [
            "id" => 6,
            "title" => "Profesionalni gejmerski računar",
            "description" => "Nov gejmerski računar visokih performansi, modernog dizajna, malih dimenzija, veoma lagan.",
            "img" => "public/theme/img/products/computer-computer-keyboard-contemporary-display-257881.jpg",
            "price" => 1239.99,
            "category" => "gadget",
            "brand" => "computer",
            "available" => true
        ],
        [
            "id" => 32,
            "title" => "Izgubljen ljubimac!",
            "description" => "Izgubljen kućni ljubimac rase \"Istočno-šumadijski zemljoprevrtač\" na lokaciji Šoping Centra Ušće. Ne odaziva se kad nije gladan. Pronalazaču sledi nagrada.",
            "img" => "public/theme/img/products/black-pig-on-green-grass-3178266.jpg",
            "price" => 999.35,
            "category" => "pets",
            "brand" => "dog",
            "available" => true
        ],
        [
            "id" => 43,
            "title" => "Udoban, brz, pouzdan",
            "description" => "Auto u dobrom stanju motor menjač i limarija dobri klima radi sitna oštećenja od gradske vožnje.",
            "img" => "public/theme/img/products/photo-of-abandoned-green-car-beside-post-2528368.jpg",
            "price" => 5325,
            "category" => "cars",
            "brand" => "car",
            "available" => true
        ],
        [
            "id" => 47,
            "title" => "Izuzetne tube",
            "description" => "Na prodaju kolor tube, malo korišćene i nisu puno otrovne.",
            "img" => "public/theme/img/products/white-color-soft-tubes-1327717.jpg",
            "price" => 12300,
            "category" => "different",
            "brand" => "tubes",
            "available" => true
        ],
        [
            "id" => 101,
            "title" => "Izlet",
            "description" => "Planinarsko-sportski klub \"Izletnik\" iz Kruševca organizuje spust niz ulice, kada se budu stekli uslovi za to, tj. čim bude pala prva kiša. Prijave slati u inbox.",
            "img" => "public/theme/img/products/yellow-duckies-in-line-on-a-concrete-floor-106144.jpg",
            "price" => 120,
            "category" => "different",
            "brand" => "trip",
            "available" => true
        ],
        [
            "id" => 62,
            "title" => "Stan",
            "description" => "Prodajem ili izdajem dvoiposoban stan u strogom centru Novog Sada, Centralno grejanje, kablovska. Manja oštećenja na zidovima od dece koja se igrala sa vozićima.",
            "img" => "public/theme/img/products/accident-disaster-steam-locomotive-train-wreck-73821.jpg",
            "price" => 550,
            "category" => "real estate",
            "brand" => "housing",
            "available" => true
        ],
        [
            "id" => 75,
            "title" => "Građevinsko zemljište",
            "description" => "Na prodaju plac od 25 ari, u \"Beogradu na vodi\" pogodan za izgradnju stanova i lokala. Voda, struja, telefon, kablovska...",
            "img" => "public/theme/img/products/tree-at-the-desert-1821699.jpg",
            "price" => 150900,
            "category" => "real estate",
            "brand" => "lot",
            "available" => true
        ],
        [
            "id" => 74,
            "title" => "NOV NOV NOV",
            "description" => "Prodajem dobro očuvan auto, malo prešao, kao nov!",
            "img" => "public/theme/img/products/photo-of-corroded-vintage-white-and-red-sedan-on-brown-grass-1089425.jpg",
            "price" => 4850,
            "category" => "cars",
            "brand" => "car",
            "available" => true
        ],
        [
            "id" => 59,
            "title" => "Profesionalni gejmerski računar",
            "description" => "Nov gejmerski računar visokih performansi, modernog dizajna, malih dimenzija, veoma lagan.",
            "img" => "public/theme/img/products/computer-computer-keyboard-contemporary-display-257881.jpg",
            "price" => 1239.99,
            "category" => "gadget",
            "brand" => "computer",
            "available" => false
        ],
        [
            "id" => 92,
            "title" => "Izgubljen ljubimac!",
            "description" => "Izgubljen kućni ljubimac rase \"Istočno-šumadijski zemljoprevrtač\" na lokaciji Šoping Centra Ušće. Ne odaziva se kad nije gladan. Pronalazaču sledi nagrada.",
            "img" => "public/theme/img/products/black-pig-on-green-grass-3178266.jpg",
            "price" => 999.35,
            "category" => "pets",
            "brand" => "dog",
            "available" => true
        ],
        [
            "id" => 75,
            "title" => "Udoban, brz, pouzdan",
            "description" => "Auto u dobrom stanju motor menjač i limarija dobri klima radi sitna oštećenja od gradske vožnje.",
            "img" => "public/theme/img/products/photo-of-abandoned-green-car-beside-post-2528368.jpg",
            "price" => 5325,
            "category" => "cars",
            "brand" => "car",
            "available" => false
        ],
        [
            "id" => 99,
            "title" => "Izuzetne tube",
            "description" => "Na prodaju kolor tube, malo korišćene i nisu puno otrovne.",
            "img" => "public/theme/img/products/white-color-soft-tubes-1327717.jpg",
            "price" => 12300,
            "category" => "different",
            "brand" => "tubes",
            "available" => true
        ],
        [
            "id" => 80,
            "title" => "Izlet",
            "description" => "Planinarsko-sportski klub \"Izletnik\" iz Kruševca organizuje spust niz ulice, kada se budu stekli uslovi za to, tj. čim bude pala prva kiša. Prijave slati u inbox.",
            "img" => "public/theme/img/products/yellow-duckies-in-line-on-a-concrete-floor-106144.jpg",
            "price" => 120,
            "category" => "different",
            "brand" => "trip",
            "available" => true
        ],
        [
            "id" => 108,
            "title" => "Stan",
            "description" => "Prodajem ili izdajem dvoiposoban stan u strogom centru Novog Sada, Centralno grejanje, kablovska. Manja oštećenja na zidovima od dece koja se igrala sa vozićima.",
            "img" => "public/theme/img/products/accident-disaster-steam-locomotive-train-wreck-73821.jpg",
            "price" => 550,
            "category" => "real estate",
            "brand" => "housing",
            "available" => true
        ],
        [
            "id" => 112,
            "title" => "Građevinsko zemljište",
            "description" => "Na prodaju plac od 25 ari, u \"Beogradu na vodi\" pogodan za izgradnju stanova i lokala. Voda, struja, telefon, kablovska...",
            "img" => "public/theme/img/products/tree-at-the-desert-1821699.jpg",
            "price" => 150900,
            "category" => "real estate",
            "brand" => "lot",
            "available" => false
        ],
        [
            "id" => 122,
            "title" => "NOV NOV NOV",
            "description" => "Prodajem dobro očuvan auto, malo prešao, kao nov!",
            "img" => "public/theme/img/products/photo-of-corroded-vintage-white-and-red-sedan-on-brown-grass-1089425.jpg",
            "price" => 4850,
            "category" => "cars",
            "brand" => "car",
            "available" => false
        ],
        [
            "id" => 127,
            "title" => "Profesionalni gejmerski računar",
            "description" => "Nov gejmerski računar visokih performansi, modernog dizajna, malih dimenzija, veoma lagan.",
            "img" => "public/theme/img/products/computer-computer-keyboard-contemporary-display-257881.jpg",
            "price" => 1239.99,
            "category" => "gadget",
            "brand" => "computer",
            "available" => true
        ],
        [
            "id" => 129,
            "title" => "Izgubljen ljubimac!",
            "description" => "Izgubljen kućni ljubimac rase \"Istočno-šumadijski zemljoprevrtač\" na lokaciji Šoping Centra Ušće. Ne odaziva se kad nije gladan. Pronalazaču sledi nagrada.",
            "img" => "public/theme/img/products/black-pig-on-green-grass-3178266.jpg",
            "price" => 999.35,
            "category" => "pets",
            "brand" => "dog",
            "available" => true
        ],
        [
            "id" => 132,
            "title" => "Udoban, brz, pouzdan",
            "description" => "Auto u dobrom stanju motor menjač i limarija dobri klima radi sitna oštećenja od gradske vožnje.",
            "img" => "public/theme/img/products/photo-of-abandoned-green-car-beside-post-2528368.jpg",
            "price" => 5325,
            "category" => "cars",
            "brand" => "car",
            "available" => false
        ],
        [
            "id" => 135,
            "title" => "Izuzetne tube",
            "description" => "Na prodaju kolor tube, malo korišćene i nisu puno otrovne.",
            "img" => "public/theme/img/products/white-color-soft-tubes-1327717.jpg",
            "price" => 12300,
            "category" => "different",
            "brand" => "tubes",
            "available" => true
        ],
        [
            "id" => 237,
            "title" => "Izlet",
            "description" => "Planinarsko-sportski klub \"Izletnik\" iz Kruševca organizuje spust niz ulice, kada se budu stekli uslovi za to, tj. čim bude pala prva kiša. Prijave slati u inbox.",
            "img" => "public/theme/img/products/yellow-duckies-in-line-on-a-concrete-floor-106144.jpg",
            "price" => 120,
            "category" => "different",
            "brand" => "trip",
            "available" => true
        ],
        [
            "id" => 141,
            "title" => "Stan",
            "description" => "Prodajem ili izdajem dvoiposoban stan u strogom centru Novog Sada, Centralno grejanje, kablovska. Manja oštećenja na zidovima od dece koja se igrala sa vozićima.",
            "img" => "public/theme/img/products/accident-disaster-steam-locomotive-train-wreck-73821.jpg",
            "price" => 550,
            "category" => "real estate",
            "brand" => "housing",
            "available" => false
        ],
        [
            "id" => 145,
            "title" => "Građevinsko zemljište",
            "description" => "Na prodaju plac od 25 ari, u \"Beogradu na vodi\" pogodan za izgradnju stanova i lokala. Voda, struja, telefon, kablovska...",
            "img" => "public/theme/img/products/tree-at-the-desert-1821699.jpg",
            "price" => 150900,
            "category" => "real estate",
            "brand" => "lot",
            "available" => false
        ],
        [
            "id" => 155,
            "title" => "Profesionalni gejmerski računar",
            "description" => "Nov gejmerski računar visokih performansi, modernog dizajna, malih dimenzija, veoma lagan.",
            "img" => "public/theme/img/products/computer-computer-keyboard-contemporary-display-257881.jpg",
            "price" => 1239.99,
            "category" => "gadget",
            "brand" => "computer",
            "available" => true
        ]
    );
    return $arr;
    }