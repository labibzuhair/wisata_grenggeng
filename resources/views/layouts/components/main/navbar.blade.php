<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-nav ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/images/logo.png" alt="Bootstrap" width="60" height="34">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}"
                        href="{{ route('tentang') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('produk*') ? 'active' : '' }}"
                        href="{{ route('produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kegiatan*') ? 'active' : '' }}"
                        href="{{ route('kegiatan') }}">Event</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('wisata*') ? 'active' : '' }}" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Wisata
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item {{ request()->is('wisata/edukasi*') ? 'active' : '' }}"
                                href="#">
                                Wisata Edukasi &raquo;
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li>
                                    <a class="dropdown-item {{ request()->is('wisata/edukasi/anyaman-pandan') ? 'active' : '' }}"
                                        href="{{ route('anyaman-pandan') }}">ِAnyaman Pandan</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('wisata/edukasi/TTG') ? 'active' : '' }}"
                                        href="{{ route('TTG') }}">TTG (Teknologi Tepat Guna)</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('wisata/edukasi/wisata-sejarah') ? 'active' : '' }}"
                                        href="{{ route('wisata-sejarah') }}">Wisata Sejarah</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="#">Multi level 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Multi level 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('wisata/religi*') ? 'active' : '' }}"
                                href="#">
                                Wisata Religi &raquo;
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li>
                                    <a class="dropdown-item {{ request()->is('wisata/religi/makam') ? 'active' : '' }}"
                                        href="{{ route('makam') }}">Makam Syekh Baribin</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="#">Multi level 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Multi level 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('wisata/kuliner*') ? 'active' : '' }}"
                                href="#">
                                Wisata Kuliner &raquo;
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li>
                                    <a class="dropdown-item {{ request()->is('wisata/kuliner/lembah-pereng') ? 'active' : '' }}"
                                        href="{{ route('lembah-pereng') }}">Lembah Pereng</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('wisata/kuliner/pasar') ? 'active' : '' }}"
                                        href="{{ route('pasar') }}">Pasar Desa (Pasar Kemit)</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="#">Multi level 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Multi level 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('paket-wisata') ? 'active' : '' }}"
                        href="{{ route('paket-wisata') }}">Paket Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" href="https://grenggeng.kec-karanganyar.kebumenkab.go.id/"
                        target="_blank">Website Desa</a>
                </li>
            </ul>
            <ul class="icon-list">
                <li><a href="{{ route('produk') }}"><i class="fa-solid fa-cart-shopping"
                            style="color: #ffffff;"></i></a></li>
                <li><a href="wa.me/082136612876"><i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
