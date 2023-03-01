<x-layout>
  <div class="container-fluid text-white my-5 py-5">
    <div class="row">
      <!-- Filtri ricerca -->
      <div class="col-12 col-lg-3 ps-5 box-color">
        
        <div class="col-12 pt-5">
          <h2>Filtri Ricerca</h2>
        </div>
        <!-- Prezzo -->
        <div class="col-12 pt-5">
          <h2>Prezzo €</h2>            
          <div class="text-white">
            <input placeholder="Da qualsiasi" type="text" name="text" class="input-price my-2">
          </div>
          <div class="text-white">
            <input placeholder="A qualsiasi" type="text" name="text" class="input-price my-2">
          </div>
        </div>

        <!-- Condizioni -->
        <div class="col-12 pt-5">
          <h2>Condizioni</h2>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexUsage" id="piu-recenti">
            <label class="form-check-label" for="piu-recenti">
              Nuovo
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexUsage" id="meno-recenti" checked>
            <label class="form-check-label" for="meno-recenti">
              Usato
            </label>
          </div>
        </div>

        <!-- Pubblicazione -->
        <div class="col-12 pt-5">
          <h2>Pubblicazione</h2>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexDate" id="last24h">
            <label class="form-check-label" for="last24h">
              Ultime 24 ore
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexDate" id="last7d" checked>
            <label class="form-check-label" for="last7d">
              Ultimi 7 giorni
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexDate" id="last30d">
            <label class="form-check-label" for="last30d">
              Ultimi 30 giorni
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexDate" id="last90d" checked>
            <label class="form-check-label" for="last90d">
              Ultimi 90 giorni
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexDate" id="all" checked>
            <label class="form-check-label" for="all">
              Tutti
            </label>
          </div>
        </div>

        <!-- Categorie -->
        <div id="categoryWrapperA" class="col-12 pt-5">
          <h2>Categorie</h2>
          
        </div>

        <!-- Marca -->
        <div id="brandWrapperA" class="col-12 pt-5">
          <h2>Marca</h2>
        </div>

        <!-- Rating Prodotto -->
        <div class="col-12 col-md-9">
          
        </div>

        <!-- Rating Venditore -->
        <div class="col-12 col-md-9">
          
        </div>
        
        <!-- Località -->
        <div class="col-12 col-md-9">
          
        </div>
        
      </div>
      
      <!-- Cards -->
      <div class="col-12 col-lg-9 ps-2">
        <div id="cardWrapperA" class="row">
          
        </div>
      </div> 

    </div>
  </div>
</x-layout>