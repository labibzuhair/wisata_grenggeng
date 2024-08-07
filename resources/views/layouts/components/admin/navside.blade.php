<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Input Group</div>
                <a class="nav-link collapsed {{ request()->is('admin/produk*') ? 'active' : '' }}" href="#"
                    data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false"
                    aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-brands fa-product-hunt me-2"></i> </div>
                    Produks
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ request()->is('admin/produk/produk-terbaik') ? 'active' : '' }}"
                            href="{{ route('admin.produk.produk-terbaik') }}">Produk Terbaik</a>
                        <a class="nav-link {{ request()->is('admin/produk/anyaman-pandan') ? 'active' : '' }}"
                            href="{{ route('admin.produk.anyaman-pandan') }}">Anyaman Pandan</a>
                        <a class="nav-link {{ request()->is('admin/produk/ttg') ? 'active' : '' }}"
                            href="{{ route('admin.produk.ttg') }}">Teknologi Tepat Guna</a>
                        <a class="nav-link {{ request()->is('admin/produk/oleh-oleh') ? 'active' : '' }}"
                            href="{{ route('admin.produk.oleh-oleh') }}">Oleh-Oleh</a>
                    </nav>
                </div>

                {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div> --}}

                <div class="sb-sidenav-menu-heading">lainnya</div>
                <a class="nav-link {{ request()->is('admin/sliders') ? 'active' : '' }}"
                    href="{{ route('admin.sliders') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-sliders me-2"></i></div>
                    Sliders
                </a>
                <a class="nav-link {{ request()->is('admin/event') ? 'active' : '' }}"
                    href="{{ route('admin.event') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-days me-2"></i></div>
                    Event
                </a>
                <a class="nav-link {{ request()->is('admin/paket-wisata') ? 'active' : '' }}"
                    href="{{ route('admin.paket-wisata') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list-check me-2"></i></div>
                    Paket Wisata
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Masuk Sebagai:</div>
            Admin Desa
        </div>
    </nav>
</div>
