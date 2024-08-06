<!-- resources/views/layouts/admin/partials/navbar.blade.php -->
<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Desa Wisata Grenggeng</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end d-flex flex-column" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Grenggeng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body flex-grow-1">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active d-flex align-items-center" aria-current="page" href="#">
                            <i class="fa-solid fa-gauge me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="#">
                            <i class="fa-solid fa-sliders me-2"></i> Sider
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="#">
                            <i class="fa-solid fa-calendar-days me-2"></i> Event
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-brands fa-product-hunt me-2"></i> Produk
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Produk Anyaman Pandan</a></li>
                            <li><a class="dropdown-item" href="#">Produk TTG</a></li>
                            <li><a class="dropdown-item" href="#">Produk Makanan Ringan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Produk Terbaik</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="#">
                            <i class="fa-solid fa-list-check me-2"></i> Paket Wisata
                        </a>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-footer mt-auto p-4">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-right-to-bracket me-2"></i><b>Log Out</b>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>
