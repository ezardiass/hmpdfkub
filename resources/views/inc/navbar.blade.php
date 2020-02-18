<link rel="stylesheet" href="{{asset("css/nav.css")}}">

<nav class="navbar fixed-top navbar-expand-md">
    <span class="navbar-brand">HMPD</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_hmpd"
        aria-controls="navbar_hmpd" aria-expanded="false" aria-label="Toggle navigation">
        <span style="color:white; font-size:24px"><i class="fas fa-list-ul"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar_hmpd">
        <ul class="navbar-nav mr-auto">
        </ul>
        <span class="my-4 my-md-0 list">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profil">Profil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/bidang-kerja" id="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Bidang Kerja</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="/bidang-kerja">Bidang 1</a>
                        <a class="dropdown-item" href="/bidang-kerja">Bidang 2</a>
                        <a class="dropdown-item" href="/bidang-kerja">Bidang 3</a>
                        <a class="dropdown-item" href="/bidang-kerja">Bidang 4</a>
                        <a class="dropdown-item" href="/bidang-kerja">Bidang 5</a>
                        <a class="dropdown-item" href="/bidang-kerja">Bidang 6</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/aktifitas" id="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Aktifitas</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="/berita">Berita</a>
                        <a class="dropdown-item" href="/galeri">Galeri</a>
                        <a class="dropdown-item" href="/merchandise">Merchandise</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Link</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="#">Podcast</a>
                        <a class="dropdown-item" href="#">Sambatkuy</a>
                    </div>
                </li>
            </ul>
        </span>
    </div>
</nav>
