
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #3C4B64">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item mx-3">
                <a class="nav-link text-white fw-semibold fs-5 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                Dashboard
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-white fw-semibold fs-5 {{ Request::is('jurnal_umum') ? 'active' : '' }}" href="/jurnal_umum">
                Jurnal Umum
                </a>
            </li>
            
            <li class="nav-item dropdown" style="margin-left: 12px">
                <button class="nav-link dropdown-toggle dropdown-btn text-white fw-semibold fs-5 {{ Request::is('pembelian') ? 'active' : '' }} 
                {{ Request::is('penjualan') ? 'active' : '' }} {{ Request::is('pengeluaran_kas') ? 'active' : '' }} {{ Request::is('pemasukan_kas') ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Jurnal Khusus<i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container style-dropdown">
                    <a href="/pembelian" class="active">Pembelian</a>
                    <a href="/penjualan">Penjualan</a>
                    <a href="/pengeluaran_kas">Pengeluaran Kas</a>
                    <a href="/pemasukan_kas">Pemasukan Kas</a>
                    {{-- <a href="/pembelian"        class="{{ Request::is('pembelian') ? 'active' : '' }}">Pembelian</a>
                    <a href="/penjualan"        class="{{ Request::is('penjualan') ? 'active' : '' }}">Penjualan</a>
                    <a href="/pengeluaran_kas"  class="{{ Request::is('pengeluaran_kas') ? 'active' : '' }}">Pengeluaran Kas</a>
                    <a href="/pemasukan_kas"    class="{{ Request::is('pemasukan_kas') ? 'active' : '' }}">Pemasukan Kas</a> --}}
                </div>
            </li>

            <li class="nav-item mx-3">
                <a class="nav-link text-white fw-semibold fs-5 {{ Request::is('buku_besar') ? 'active' : '' }}" href="/buku_besar">
                Buku Besar
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-white fw-semibold fs-5 {{ Request::is('wtb') ? 'active' : '' }}" href="/wtb">
                WTB
                </a>
            </li>
            
            <li class="nav-item dropdown" style="margin-left: 12px"> 
                <button class="nav-link dropdown-toggle dropdown-btn text-white fw-semibold fs-5 {{ Request::is('laba_rugi') ? 'active' : '' }}
                {{ Request::is('posisi_keuangan') ? 'active' : '' }} {{ Request::is('calk') ? 'active' : '' }} " 
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Laporan Keuangan<i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container style-dropdown">
                    <a href="/laba_rugi">Laba Rugi</a>
                    <a href="/posisi_keuangan">Posisi Keuangan</a>
                    <a href="/calk">CALK</a>
                </div>
            </li>

            <li class="nav-item dropdown" style="margin-left: 12px">
                <button class="nav-link dropdown-toggle dropdown-btn text-white fw-semibold fs-5 {{ Request::is('form_permintaan_kas') ? 'active' : '' }}
                {{ Request::is('form_purchase_order') ? 'active' : '' }} {{ Request::is('form_pengiriman_barang') ? 'active' : '' }} 
                {{ Request::is('invoice_penjualan_tunai') ? 'active' : '' }} {{ Request::is('invoice_penjualan_kredit') ? 'active' : '' }}" 
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Invoice<i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container style-dropdown">
                    <a href="/form_permintaan_kas">Formulir Permintaan Kas</a>
                    <a href="/form_purchase_order">Formulir Purchase Order</a>
                    <a href="/form_pengiriman_barang">Formulir Pengiriman Barang</a>
                    <a href="/invoice_penjualan_tunai">Invoice Penjualan Tunai</a>
                    <a href="/invoice_penjualan_kredit">Invoice Penjualan Kredit</a>
                </div>
            </li>

            <li class="nav-item dropdown" style="margin-left: 12px">
                <button class="nav-link dropdown-toggle dropdown-btn text-white fw-semibold fs-5 {{ Request::is('barang') ? 'active' : '' }}
                {{ Request::is('vendor') ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Data Master<i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container style-dropdown">
                    <a href="/barang">Barang</a>
                    <a href="/vendor">Vendor</a>
                </div>
            </li>

        </ul>
    </div>
</nav>
