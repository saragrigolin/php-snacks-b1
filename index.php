<!-- Milestone 1: a partire dall'array realizzato stamattina, realizziamo una API che chiameremo con Vue. -->
<!-- Milestone 2: stampiamo in una pagina tutte le auto con Vue. 
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
    'accessori' => 'climatizzatore, autoradio, ruota di riserva, ruotino, ABS, airbag, chiusura centralizzata',
    'trazione' => null,
    'foto' => 'https://prod.pictures.autoscout24.net/listing-images/e7effc46-ee41-40a0-bb05-468ca16dcd5d_0590579d-fd3e-42b5-9b19-393f753e220d.jpg/640x480.jpg',
    'localita' => 'Modena',-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header class="my-header py-3">
            <div class="container-fluid d-flex w-75">
                <div>
                    <span class="me-2">Scegli il colore:</span>
                    <select class="px-2" @change="filterCars()" name="colore" id="colore" v-model="colorFilter">
                    <option value="all">All</option>
                    <option value="bianco">Bianco</option>
                    <option value="blu">Blu</option>
                    <option value="grigio">Grigio metallizzato</option>
                    <option value="nero">Nero</option>
                    </select>
                </div>
                <div>
                    <span class="ms-5 me-2">Scegli il tipo di carburante:</span>
                    <select class="px-2" @change="filterCars()" name="carburante" id="carburante" v-model="fuelFilter">
                    <option value="all">All</option>
                    <option value="benzina">Benzina</option>
                    <option value="diesel">Diesel</option>
                    <option value="metano">Metano</option>
                    </select>
                </div>
            </div>
        </header>
        <div class="container d-flex align-items-center my-container">
            <div class="row w-100 row-cols-3 d-flex">
            <div v-for="car in filteredArray" class="col py-3">
                <div class="car-card p-2">
                    <h3 class="text-center">{{car.marca}} {{car.modello}}</h3>
                    <div class="my-3 img-container">
                        <img v-if="car.foto != null" class="w-100" :src="car.foto" alt="">
                        <img v-else class="w-100" src="https://www.granibruni.it/wp-content/themes/claue/assets/images/placeholder.png" alt="">
                    </div>
                    <ul class="dash">
                        <li>Carburante: {{car.carburante}}</li>
                        <li>Cilindrata: {{car.cilindrata}} cm³</li>
                        <li v-show="car.cavalli != null">Cavalli: {{car.cavalli}}cv</li>
                        <li>Anno di immatricolazione: {{car.anno}}</li>
                        <li v-show="car.proprietari != null">Proprietari precedenti: {{car.proprietari}}</li>
                        <li>Colore: {{car.colore}}</li>
                        <li>Chilometri: {{car.chilometri}}km</li>
                        <li>Trasmissione: {{car.trasmissione}}</li>
                        <li>Carrozzeria: {{car.carrozzeria}}</li>
                        <li v-show="car.targa != null">Targa: {{car.targa}}</li>
                        <li>Prezzo: {{car.prezzo}}€</li>
                        <li>Numero porte: {{car.porte}}</li>
                        <li>Accessori: <span v-for="(accessorio, index) in car.accessori" :key="index"><span v-if="index == car.accessori.length - 1">{{accessorio}}</span><span v-else>{{accessorio}}, </span></span>
                        </li>
                        <li v-show="car.trazione != null">Trazione: {{car.trazione}}</li>
                        <li>Località: {{car.localita}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>