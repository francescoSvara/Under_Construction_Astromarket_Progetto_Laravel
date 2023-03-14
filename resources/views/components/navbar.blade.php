<nav class="navbar font-text navbar-expand-md navbar-dark py-0" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a href="{{route('homepage')}}"><img src="./media/LOGO.png" width="100" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav">
            <li class="nav-item mx-3">
                <a class="nav-link btn-nav fs-bold bg-mix" href="#"><span>Servizi</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link btn-nav fs-bold bg-mix" href="{{route('contact')}}">Contatti</a>
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
                    <li><a class="dropdown-item font-text" href="{{route('product.index')}}">Tutte le categorie</a></li>
                </ul>
                </div>
            </li>
            </ul>
        </div>
    </div>
</nav>