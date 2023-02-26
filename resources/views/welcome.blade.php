<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AstroMarket</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
  
  <!-- FONT AWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- BOOTSTRAP CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  
  
  <!-- SWIPER CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/query.css">
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar font-text navbar-expand-md navbar-dark py-0" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a href="./index.html"><img src="./media/LOGO.png" width="100" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link btn-nav fs-bold bg-mix" href="#"><span>Servizi</span></a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link btn-nav fs-bold bg-mix" href="#">Contatti</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link btn-nav fs-bold bg-mix" href="#">Aiuto</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link btn-nav fs-bold bg-mix" href="#">Ricerche salvate</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link btn-nav fs-bold bg-mix" href="#">Preferiti</a>
          </li>
          <li class="nav-item p-cs">
            <div class="dropdown">
              <button class="btn text-white fs-bold bg-mix dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </button>
              <ul id="categorieWrapper" class="dropdown-menu">
                <li><a class="dropdown-item font-text" href="/annunci">Tutte le categorie</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- MAIN -->
  <main>
    <!-- Titolo e sottotilo -->
    <div class="container py-2">
      <div class="row my-4">
        <div class="col-12 col-lg-6">
          <img src="./media/A letter tech logo.gif" height="400" alt="">
          <h3 class="text-white font-title titoloDue ms-4">SCOPRI IL FUTURO DELLO SHOPPING ONLINE</h3>
          <button class="btn-log tx-a font-text slide-fwd-center">
            <span class="box">
              Accedi
            </span>
          </button>
          <button class="btn-log tx-a font-text">
            <span class="box">
              Registrati
            </span>
          </button>
        </div>
        <div class="col-12 col-lg-6 d-flex">
          <div class="mx-auto img_gif"></div>
        </div>
      </div>
    </div>
    
    <!--Sezione cerca-->
    <div class="container font-text text-white pb-5 my-5">
      <div class="row">
        <div class="col-12 col-lg-3">
          <label for="inputSearch">Cosa cerchi di preciso?</label>
          <input placeholder="iPhone, Cuffie, Portatile" class="input" name="text" type="text">
        </div>
        <div class="col-12 col-lg-3">
          <label for="inputSearch">In quale categoria?</label>
          <select class="input text-white" name="category">
            <option value="" disabled selected>Seleziona una categoria</option>
            <option value="laptops">Laptops</option>
            <option value="smartphone">Smartphone</option>
            <option value="camaras">Camaras</option>
            <option value="console">Console</option>
            <option value="drones">Drones</option>
            <option value="smartwatch">Smartwatch</option>
            <option value="accessories">Accesories</option>
          </select>
        </div>
        <div class="col-12 col-lg-3">
          <label for="inputSearch">Dove?</label>
          <input placeholder="Comune, Provincia o Regione" class="input" name="text" type="text">
        </div>
        <div class="col-12 col-lg-3 mt-2 px-auto d-flex ">
          <button class="btn-search">
            <div>
              <div>
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </div>
            <span class="">Cerca</span>
          </button>
        </div>
      </div>
    </div>
    
    <!-- Sezione uno - Prodotti Disponibili -->
    <div class="container mt-0 mt-lg-5">
      <div id="prodottiCaricati" class="row prodottiCaricatiRmv">
        <div class="col-12 col-lg-6 py-5 d-flex justify-content-center">
          <div id="prodottiCaricatiWrapper" class="circle-data text-white d-flex justify-content-center align-items-center">
          </div>
        </div>
        <div  class="col-12 col-lg-6 align-items-center justify-content-center my-auto">
          <h2 class="bg-mix font-title text-center fs-bold mx-5">PRODOTTI DISPONIBILI</h2>
          <p class="text-white font-text text-center mx-5"> Siamo lieti di offrire una piattaforma dedicata ai prodotti all'avanguardia del mercato. Sfoglia la nostra selezione di laptop, smartphone, console e molto altro. Trova il prodotto che risponde alle tue esigenze tecnologiche, oppure pubblica il tuo annuncio per vendere i tuoi prodotti inutilizzati. Con la nostra selezione di prodotti di alta qualità e all'avanguardia, puoi sempre rimanere al passo con le ultime tendenze tecnologiche.</p>
        </div>
      </div>
    </div>
    
    <!-- sezione due - Rating prodotti -->
    <div class="container py-5">
      <div id="ratingProducts" class="row prodottiCaricatiRmv">
        <div class="col-12 col-lg-6 py-5 d-flex justify-content-center order-lg-last">
          <div id="ratingProductsWrapper" class="circle-data text-white d-flex justify-content-center align-items-center">
            <p class="display-3"></p>
          </div>
        </div>
        <div class="col-12 col-lg-6 align-items-center justify-content-center my-auto">
          <h2 class="bg-mix font-title text-center fs-bold mx-5">RATING PRODOTTI</h2>
          <p class="text-white font-text text-center mx-5">Utilizziamo una combinazione di parametri per determinare il punteggio di ogni prodotto che includono le recensioni dei clienti, la sua popolarità, la qualità dei materiali e la sua funzionalità. Inoltre, teniamo in considerazione anche il suo prezzo per garantire che sia equo e competitivo rispetto ad altri prodotti simili sul mercato. Sfoglia la nostra offerta e vedi il punteggio attribuito da altri utenti per avere un'idea di quale è il migliore per te.</p>
        </div>
      </div>
    </div>
    
    <!-- sezione tre - Rating venditori -->
    <div class="container pb-5">
      <div id="ratingSellers" class="row prodottiCaricatiRmv">
        <div class="col-12 col-lg-6 py-5 d-flex justify-content-center">
          <div id="ratingSellerWrapper" class="circle-data text-white d-flex justify-content-center align-items-center">
            <p class="display-3"></p>
          </div>
        </div>
        <div class="col-12 col-lg-6 align-items-center justify-content-center my-auto">
          <h2 class="bg-mix font-title text-center fs-bold mx-5">RATING VENDITORI</h2>
          <p class="text-white font-text text-center mx-5">Offriamo un sistema di valutazione affidabile e preciso per i venditori che comprende: la qualità dei prodotti offerti, la velocità di consegna, la professionalità del supporto clienti e il loro grado di soddisfazione. Inoltre, consideriamo anche il volume di affari del venditore e la loro storia sul nostro sito. Il nostro sistema di valutazione ti aiuta a identificare i venditori di alta qualità ed a effettuare acquisti con fiducia.</p>
        </div>
      </div>
    </div>
    
    <!-- Sezione Cards Category -->
    <div class="container mt-5 py-5">
      <div class="row ">
        <div class="col-12">
          <div class="swiper mySwiper">
            <div id="slidesWrapper" class="swiper-wrapper font-title">
            </div>
          </div>
        </div>
        <div class="col-12 order-first d-flex justify-content-center align-items-center">
          <p class="display-5 font-title text-center text-white bg-mix">
            TUTTE LE CATEGORIE
          </p>
        </div>
      </div>
    </div>
    
    <!-- Ultimi cinque elementi -->
    <div class="container-fluid mt-5 py-5">
      <div id="lastUpdated" class="row">
        
        <div class="col-12 order-first d-flex justify-content-center align-items-center">
          <p class="display-5 font-title bg-mix text-center text-white">
            ULTIMI PRODOTTI CARICATI...
          </p>
        </div>
      </div>
    </div>
  </main>
  
  <!-- FOOTER -->
  <footer>    
    <div class="container-fluid border-0 pt-4 border-top">
      <div class="row">
        <div class="col-4 d-flex">
          <ul class="font-style text-white">
          <li class="fs-bold bg-mix mx-auto"> Astromarket</li>
            <li class="py-1">Aiuto</li>
            <li class="py-1">Regole</li>
            <li class="py-1">Sicurezza</li>
            <li class="py-1">Privacy</li>
            <li class="py-1">Gestisci Cookies</li>
            <li class="py-1">Inserisci Annuncio</li>
            <li class="py-1">Promuovi Annuncio</li>
          </ul>
        </div>
        <div class="col-4">
          <ul class="font-style text-white">
          <li class="fs-bold bg-mix mx-auto">Seguici su</li>
          <li><i class="fa-brands fa-square-facebook pt-4 pe-3"></i>Facebook</li>
          <li><i class="fa-brands fa-instagram pt-4 pe-3"></i>Instagram</li>
          <li><i class="fa-brands fa-linkedin pt-4 pe-3"></i>Linkedin</li>
          <li><i class="fa-brands fa-twitter pt-4 pe-3 "></i>Twitter</li>
        </ul>
        </div>
        <div class="col-4">
          <ul class="font-style text-white">
          <li class="fs-bold bg-mix mx-auto">Scarica gratis l'App</li>
          <li><i class="fa-brands fa-android py-3 pe-3"></i>Android</li>
          <li><i class="fa-brands fa-apple py-3 pe-3"></i>IOS</li>
        </ul>
        </div>
      </div>
    </div>    
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>