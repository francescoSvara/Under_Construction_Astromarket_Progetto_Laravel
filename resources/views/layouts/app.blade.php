<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ?? 'Astromarket' }}</title>
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
        <header>
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
        </header>

        <main>
            <!-- Inserisci il tuo contenuto principale qui -->
            @yield('content')
        </main>

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
        <script src="/annunci.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    </body>
</html>
