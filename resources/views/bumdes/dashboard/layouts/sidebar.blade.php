<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #3C4B64">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item mx-3">
                <a class="nav-link text-white fw-semibold fs-6 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="">
                Dashboard
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-white fw-semibold fs-6 {{ Request::is('jurnal_umum') ? 'active' : '' }}" href="/jurnal_umum">
                Jurnal Umum
                </a>
            </li>
            
            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle text-white fw-semibold fs-6" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Jurnal Khusus
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Pembelian</a></li>
                    <li><a class="dropdown-item" href="">Penjualan</a></li>
                    <li><a class="dropdown-item" href="">Pengeluaran Kas</a></li>
                    <li><a class="dropdown-item" href="">Pemasukan Kas</a></li>
                </ul>
            </li>

            <li class="nav-item mx-3">
                <a class="nav-link text-white fw-semibold fs-6" href="">
                Buku Besar
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-white fw-semibold fs-6" href="">
                WTB
                </a>
            </li>
            
            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle text-white fw-semibold fs-6" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Laporan Keuangan
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Laba Rugi</a></li>
                    <li><a class="dropdown-item" href="">Posisi Keuangan</a></li>
                    <li><a class="dropdown-item" href="">CALK</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle text-white fw-semibold fs-6" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Invoice
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Formulir Permintaan Kas</a></li>
                    <li><a class="dropdown-item" href="">Formulir Purchase Order</a></li>
                    <li><a class="dropdown-item" href="">Formulir Pengiriman Barang</a></li>
                    <li><a class="dropdown-item" href="">Invoice Penjualan Tunai</a></li>
                    <li><a class="dropdown-item" href="">Invoice Penjualan Kredit</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle text-white fw-semibold fs-6" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Data Master
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Barang</a></li>
                    <li><a class="dropdown-item" href="">Vendor</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>