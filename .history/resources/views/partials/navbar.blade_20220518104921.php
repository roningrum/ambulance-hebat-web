<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed fixed-top navbar-shrink" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand" href="#">Ambulance Hebat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link {{ ($title === "home") ? 'active' :''}}" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ ($title === "about") ? 'active' :''}}" href="/about">Tentang</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ ($title === "article") ? 'active' :''}}" href="/article">Artikel</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ ($title === "ask") ? 'active' :''}}" href="tanyakami.html">Tanya Kami</a>
                </li>
            </ul>
            <div>
                <a href="kontak-kami.html">
                    <button class="button-secondary button-secondary-hover">
                        Kontak Kami</button>
                </a>
            </div>

        </div>
    </div>
</nav>
