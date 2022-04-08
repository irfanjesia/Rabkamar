<nav class="navbar pt-4 pb-4 navbar-dark navbar-expand-lg fixed-top" id="navbar" style="transition: 0.5s; background-color: black">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">RabKamar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active==="Pesan")?'active':'' }}" aria-current="page" href="/dashboard/pesan">Pesan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active==="Akun")?'active':'' }}" href="/dashboard/akun/{{ auth()->user()->id }}">Akun Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active==="Riwayat")?'active':'' }}" href="/dashboard/riwayat/{{ auth()->user()->id }}">Riwayat Pesanan</a>
                </li>
            </ul>
            <a href="/dashboard/akun/{{ auth()->user()->id }}" class="link-light me-3 pe-3 border-end">{{ auth()->user()->name }}</a>
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-danger" type="submit">Keluar</button>
            </form>
        </div>
    </div>
</nav>