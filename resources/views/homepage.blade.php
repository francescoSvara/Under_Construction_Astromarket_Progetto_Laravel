<x-layout>
    <!-- Titolo e sottotilo -->
    <div class="container py-2">
      <div class="row my-4">
        <div class="col-12 col-lg-6">
          <img src="/media/A letter tech logo.gif" height="400" alt="">
          <h3 class="text-white font-title titoloDue ms-4">SCOPRI IL FUTURO DELLO SHOPPING ONLINE</h3>
          @auth
          <div class="d-flex">
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@Csrf</form>
            <button id="btn-login" class="btn-log tx-a font-text" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();"><span class="box">Logout</span></button>
            <p class="tx-a font-text mt-3"><span class="box">{{Auth::user()->name}}</span></p>
          </div>
          @else
          <a id="btn-login" class="btn-log tx-a font-text" href="{{route('login')}}"><span class="box">Accedi</span></a>
          <a id="btn-login" class="btn-log tx-a font-text" href="{{route('register')}}"><span class="box">Registrati</span></a>
          @endauth
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
</x-layout>