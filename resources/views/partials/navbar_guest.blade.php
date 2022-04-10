<nav class="navbar pt-4 pb-4 navbar-expand-lg navbar-dark bg-opacity-0 fixed-top" id="navbar" style="transition: 0.5s">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="/">RabKamar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active==="Home")?'active':'' }}" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active==="About")?'active':'' }}" href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-us">Hubungi Kami</a>
                </li>
            </ul>
            <a href="/login" class="link-light">Masuk</a>
        </div>
    </div>
</nav>