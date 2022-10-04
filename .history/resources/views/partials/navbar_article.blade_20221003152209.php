<nav class="navbar navbar-expand-lg navbar-dark bg-danger position-fixed fixed-top navbar-shrink" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand" href="/">Ambulance Hebat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link {{ ($title === "home") ? 'active' :''}}" href="/">Beranda</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ ($title === "tentang") ? 'active' :''}}" href="/tentang">Tentang</a>
                </li> 
                <li class="nav-item mx-3">
                    <a class="nav-link {{ ($title === "berita") ? 'active' :''}}" aria-current="page" href="/berita">Berita</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ ($title === "tanya") ? 'active' :''}}" href="/kontak-kami">Kontak Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
