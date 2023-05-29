<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JurnalUmumController;
use App\Http\Controllers\JurnalPembelianController;
use App\Http\Controllers\JurnalPenjualanController;
use App\Http\Controllers\JurnalPengeluaranKasController;
use App\Http\Controllers\JurnalPemasukanKasController;
use App\Http\Controllers\BukuBesarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WTBController;
use App\Http\Controllers\LabaRugiController;
use App\Http\Controllers\PosisiKeuanganController;
use App\Http\Controllers\CALKController;
use App\Http\Controllers\FormPermintaanKasController;
use App\Http\Controllers\FormPurchaseOrderController;
use App\Http\Controllers\FormPengirimanBarangController;
use App\Http\Controllers\InvoicePenjualanTunaiController;
use App\Http\Controllers\InvoicePenjualanKreditController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KodeRekeningController;

use App\Models\PengeluaranKas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function() {
    return view('bumdes.initialPage.index');
});

Route::get('/dashboard', function() {
    return view('bumdes.dashboard.index');
});


Route::get('/dashboard_admin', [AdminController::class, 'index']);

Route::get('/create_company', [CompanyController::class, 'create']);
Route::post('/create_company/create', [CompanyController::class, 'store']);
Route::get('/create_company/{id}/edit', [CompanyController::class, 'edit']);
Route::post('/create_company/{id}/update', [CompanyController::class, 'update']);
Route::post('/create_company/{id}/delete', [CompanyController::class, 'destroy']);

Route::get('/create_user', [UserController::class, 'create']);
Route::post('/create_user/create', [UserController::class, 'store']);
Route::get('/create_user/{id}/edit', [UserController::class, 'edit']);
Route::post('/create_user/{id}/update', [UserController::class, 'update']);
Route::post('/create_user/{id}/delete', [UserController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/jurnal_umum', [JurnalUmumController::class, 'index']);
Route::get('/jurnal_umum/create', [JurnalUmumController::class, 'create']);
Route::post('/jurnal_umum/create', [JurnalUmumController::class, 'store']);
Route::post('/jurnal_umum/createNew', [JurnalUmumController::class, 'createNew']);
Route::get('/jurnal_umum/{id}/edit', [JurnalUmumController::class, 'edit']);
Route::post('/jurnal_umum/{id}/update', [JurnalUmumController::class, 'update']);
Route::post('/jurnal_umum/{id}/delete', [JurnalUmumController::class, 'destroy']);

Route::get('/pengeluaran_kas', [JurnalPengeluaranKasController::class, 'index']);
Route::get('/pengeluaran_kas/create', [JurnalPengeluaranKasController::class, 'create']);
Route::post('/pengeluaran_kas/create', [JurnalPengeluaranKasController::class, 'store']);
Route::post('/pengeluaran_kas/createNew', [JurnalPengeluaranKasController::class, 'createNew']);
Route::get('/pengeluaran_kas/{id}/edit', [JurnalPengeluaranKasController::class, 'edit']);
Route::post('/pengeluaran_kas/{id}/update', [JurnalPengeluaranKasController::class, 'update']);
Route::post('/pengeluaran_kas/{id}/delete', [JurnalPengeluaranKasController::class, 'destroy']);

Route::get('/pemasukan_kas', [JurnalPemasukanKasController::class, 'index']);
Route::get('/pemasukan_kas/create', [JurnalPemasukanKasController::class, 'create']);
Route::post('/pemasukan_kas/create', [JurnalPemasukanKasController::class, 'store']);
Route::post('/pemasukan_kas/createNew', [JurnalPemasukanKasController::class, 'createNew']);
Route::get('/pemasukan_kas/{id}/edit', [JurnalPemasukanKasController::class, 'edit']);
Route::post('/pemasukan_kas/{id}/update', [JurnalPemasukanKasController::class, 'update']);
Route::post('/pemasukan_kas/{id}/delete', [JurnalPemasukanKasController::class, 'destroy']);

Route::get('/pembelian', [JurnalPembelianController::class, 'index']);
Route::get('/pembelian/create', [JurnalPembelianController::class, 'create']);
Route::post('/pembelian/create', [JurnalPembelianController::class, 'store']);
Route::get('/pembelian/{id}/edit', [JurnalPembelianController::class, 'edit']);
Route::post('/pembelian/{id}/update', [JurnalPembelianController::class, 'update']);
Route::post('/pembelian/{id}/delete', [JurnalPembelianController::class, 'destroy']);


Route::get('/penjualan', [JurnalPenjualanController::class, 'index']);
Route::get('/penjualan/create', [JurnalPenjualanController::class, 'create']);
Route::post('/penjualan/create', [JurnalPenjualanController::class, 'store']);
Route::get('/penjualan/{id}/edit', [JurnalPenjualanController::class, 'edit']);
Route::post('/penjualan/{id}/update', [JurnalPenjualanController::class, 'update']);
Route::post('/penjualan/{id}/delete', [JurnalPenjualanController::class, 'destroy']);

Route::get('/form_permintaan_kas', [FormPermintaanKasController::class, 'index']);
Route::get('/form_permintaan_kas/create', [FormPermintaanKasController::class, 'create']);
Route::post('/form_permintaan_kas/create', [FormPermintaanKasController::class, 'store']);
Route::get('/form_permintaan_kas/{id}/edit', [FormPermintaanKasController::class, 'edit']);
Route::post('/form_permintaan_kas/{id}/update', [FormPermintaanKasController::class, 'update']);
Route::post('/form_permintaan_kas/{id}/delete', [FormPermintaanKasController::class, 'destroy']);

Route::get('/form_purchase_order', [FormPurchaseOrderController::class, 'index']);
Route::get('/form_purchase_order/create', [FormPurchaseOrderController::class, 'create']);
Route::post('/form_purchase_order/create', [FormPurchaseOrderController::class, 'store']);
Route::get('/form_purchase_order/{id}/edit', [FormPurchaseOrderController::class, 'edit']);
Route::post('/form_purchase_order/{id}/update', [FormPurchaseOrderController::class, 'update']);
Route::post('/form_purchase_order/{id}/delete', [FormPurchaseOrderController::class, 'destroy']);

Route::get('/form_pengiriman_barang', [FormPengirimanBarangController::class, 'index']);
Route::get('/form_pengiriman_barang/create', [FormPengirimanBarangController::class, 'create']);
Route::post('/form_pengiriman_barang/create', [FormPengirimanBarangController::class, 'store']);
Route::get('/form_pengiriman_barang/{id}/edit', [FormPengirimanBarangController::class, 'edit']);
Route::post('/form_pengiriman_barang/{id}/update', [FormPengirimanBarangController::class, 'update']);
Route::post('/form_pengiriman_barang/{id}/delete', [FormPengirimanBarangController::class, 'destroy']);

Route::get('/invoice_penjualan_tunai', [InvoicePenjualanTunaiController::class, 'index']);
Route::get('/invoice_penjualan_tunai/create', [InvoicePenjualanTunaiController::class, 'create']);
Route::post('/invoice_penjualan_tunai/create', [InvoicePenjualanTunaiController::class, 'store']);
Route::get('/invoice_penjualan_tunai/{id}/edit', [InvoicePenjualanTunaiController::class, 'edit']);
Route::post('/invoice_penjualan_tunai/{id}/update', [InvoicePenjualanTunaiController::class, 'update']);
Route::post('/invoice_penjualan_tunai/{id}/delete', [InvoicePenjualanTunaiController::class, 'destroy']);

Route::get('/invoice_penjualan_kredit', [InvoicePenjualanKreditController::class, 'index']);
Route::get('/invoice_penjualan_kredit/create', [InvoicePenjualanKreditController::class, 'create']);
Route::post('/invoice_penjualan_kredit/create', [InvoicePenjualanKreditController::class, 'store']);
Route::get('/invoice_penjualan_kredit/{id}/edit', [InvoicePenjualanKreditController::class, 'edit']);
Route::post('/invoice_penjualan_kredit/{id}/update', [InvoicePenjualanKreditController::class, 'update']);
Route::post('/invoice_penjualan_kredit/{id}/delete', [InvoicePenjualanKreditController::class, 'destroy']);

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/create', [BarangController::class, 'create']);
Route::post('/barang/create', [BarangController::class, 'store']);
Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
Route::post('/barang/{id}/update', [BarangController::class, 'update']);
Route::post('/barang/{id}/delete', [BarangController::class, 'destroy']);

Route::get('/vendor', [VendorController::class, 'index']);
Route::get('/vendor/create', [VendorController::class, 'create']);
Route::post('/vendor/create', [VendorController::class, 'store']);
Route::get('/vendor/{id}/edit', [VendorController::class, 'edit']);
Route::post('/vendor/{id}/update', [VendorController::class, 'update']);
Route::post('/vendor/{id}/delete', [VendorController::class, 'destroy']);










// Route::resource('/jurnal_umum', JurnalUmumController::class);
// Route::resource('/pembelian', JurnalPembelianController::class);
// Route::resource('/penjualan', JurnalPenjualanController::class);
// Route::resource('/pengeluaran_kas', JurnalPengeluaranKasController::class);
// Route::resource('/pemasukan_kas', JurnalPemasukanKasController::class);
Route::resource('/buku_besar', BukuBesarController::class);
Route::resource('/wtb', WTBController::class);
Route::resource('/laba_rugi', LabaRugiController::class);
Route::resource('/posisi_keuangan', PosisiKeuanganController::class);
Route::resource('/calk', CALKController::class);
// Route::resource('/form_permintaan_kas', FormPermintaanKasController::class);
// Route::resource('/form_purchase_order', FormPurchaseOrderController::class);
// Route::resource('/form_pengiriman_barang', FormPengirimanBarangController::class);
// Route::resource('/invoice_penjualan_tunai', InvoicePenjualanTunaiController::class);
// Route::resource('/invoice_penjualan_kredit', InvoicePenjualanKreditController::class);
// Route::resource('/barang', BarangController::class);
// Route::resource('/vendor', VendorController::class);
Route::resource('/kode_rekening', KodeRekeningController::class);




Route::get('/kelebihan', function() {
    return view('bumdes.initialPage.kelebihan');
});

Route::get('/fitur', function() {
    return view('bumdes.initialPage.fitur');
});

Route::get('/cara-order', function() {
    return view('bumdes.initialPage.caraOrder');
});

Route::get('/kontak', function() {
    return view('bumdes.initialPage.kontak');
});
//halo ini ummi

