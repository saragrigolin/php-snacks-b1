<?php
    // In un nuovo progetto php creare un array che descriva tante auto come dati estrapolati dalla tabella del DB che avete modellizzato.
    $cars = [
        [
            'id' => 1,
            'marca' => 'Fiat',
            'modello' => 'Punto',
            'carburante' => 'metano',
            'cilindrata' => 1242,
            'cavalli' => 60,
            'anno' => 2004,
            'proprietari' => null,
            'colore' => 'bianco',
            'chilometri' => 258000,
            'trasmissione' => 'manuale',
            'carrozzeria' => 'berlina',
            'targa' => null,
            'prezzo' => 1400.00,
            'porte' => 5,
            'accessori' => ['cruise control', 'sensore di luminosità', 'sensore di pioggia', 'bluetooth', 'computer di bordo', 'cerchi in lega', 'ABS', 'ESP'],
            'trazione' => null,
            'foto' => 'https://prod.pictures.autoscout24.net/listing-images/e7effc46-ee41-40a0-bb05-468ca16dcd5d_0590579d-fd3e-42b5-9b19-393f753e220d.jpg/640x480.jpg',
            'localita' => 'Modena',
        ],
        [
            'id' => 2,
            'marca' => 'Opel',
            'modello' => 'Corsa',
            'carburante' => 'diesel',
            'cilindrata' => 1248,
            'cavalli' => 75,
            'anno' => 2014,
            'proprietari' => 1,
            'colore' => 'grigio',
            'chilometri' => 170000,
            'trasmissione' => 'manuale',
            'carrozzeria' => 'berlina',
            'targa' => null,
            'prezzo' => 5100.00,
            'porte' => 5,
            'accessori' => ['cruise control', 'sensore di luminosità', 'sensore di pioggia', 'bluetooth', 'computer di bordo', 'cerchi in lega', 'ABS', 'ESP'],
            'trazione' => 'anteriore',
            'foto' => null,
            'localita' => 'Frosinone',
        ],
        [
            'id' => 3,
            'marca' => 'Nissan',
            'modello' => 'Qashqai',
            'carburante' => 'diesel',
            'cilindrata' => 1598,
            'cavalli' => 131,
            'anno' => 2013,
            'proprietari' => 1,
            'colore' => 'nero',
            'chilometri' => 140000,
            'trasmissione' => 'manuale',
            'carrozzeria' => 'SUV fuoristrada',
            'targa' => null,
            'prezzo' => 9000.00,
            'porte' => 5,
            'accessori' => ['cruise control', 'sensore di luminosità', 'sensore di pioggia', 'bluetooth', 'computer di bordo', 'cerchi in lega', 'ABS', 'ESP'],
            'trazione' => 'anteriore',
            'foto' => 'https://prod.pictures.autoscout24.net/listing-images/42409ab7-0721-4230-87a0-6aba9976ab78_d38e0dab-291f-43b8-ab3c-267ef0c0e9d1.jpg/640x480.jpg',
            'localita' => 'Reggio Emilia',
        ],
        [
            'id' => 4,
            'marca' => 'Audi',
            'modello' => 'A1',
            'carburante' => 'diesel',
            'cilindrata' => 1422,
            'cavalli' => 90,
            'anno' => 2016,
            'proprietari' => 1,
            'colore' => 'nero',
            'chilometri' => 82000,
            'trasmissione' => 'manuale',
            'carrozzeria' => 'berlina',
            'targa' => null,
            'prezzo' => 17500.00,
            'porte' => 5,
            'accessori' => ['cruise control', 'sensore di luminosità', 'sensore di pioggia', 'bluetooth', 'computer di bordo', 'cerchi in lega', 'ABS', 'ESP'],
            'trazione' => 'anteriore',
            'foto' => 'https://prod.pictures.autoscout24.net/listing-images/85c4094f-bf6a-4146-812a-5c9f673e4a54_2b195476-1a6b-4eb8-838c-7ce3eb2f91bc.jpg/640x480.jpg',
            'localita' => 'Brescia',
        ],
        [
            'id' => 5,
            'marca' => 'Alfa Romeo',
            'modello' => 'Stelvio',
            'carburante' => 'diesel',
            'cilindrata' => 2143,
            'cavalli' => 210,
            'anno' => 2017,
            'proprietari' => 1,
            'colore' => 'blu',
            'chilometri' => 103000,
            'trasmissione' => 'automatica',
            'carrozzeria' => 'SUV fuoristrada',
            'targa' => null,
            'prezzo' => 30000.00,
            'porte' => 5,
            'accessori' => ['cruise control', 'sensore di luminosità', 'sensore di pioggia', 'bluetooth', 'computer di bordo', 'cerchi in lega', 'ABS', 'ESP'],
            'trazione' => '4x4',
            'foto' => 'https://prod.pictures.autoscout24.net/listing-images/2770c3bd-bbcb-4dae-afdf-56301e1356ec_ca7cee17-8faf-4305-afc1-95fc3e0df358.jpg/640x480.jpg',
            'localita' => 'Terni',
        ],
    ]
?>