<?php

use App\Http\Controllers\JurnalUmumController;
use App\Http\Controllers\JurnalPembelianController;
use App\Http\Controllers\JurnalPenjualanController;
use App\Http\Controllers\JurnalPengeluaranKasController;
use App\Http\Controllers\JurnalPemasukanKasController;
use App\Http\Controllers\BukuBesarController;
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
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/jurnal_umum', [JurnalUmumController::class, 'index']);
Route::get('/jurnal_umum/create', [JurnalUmumController::class, 'create']);
Route::post('/jurnal_umum/create', [JurnalUmumController::class, 'store']);
Route::post('/jurnal_umum/createNew', [JurnalUmumController::class, 'createNew']);


Route::get('/dashboard', function() {
    return view('bumdes.dashboard.index');
});


// Route::resource('/jurnal_umum', JurnalUmumController::class);
Route::resource('/pembelian', JurnalPembelianController::class);
Route::resource('/penjualan', JurnalPenjualanController::class);
Route::resource('/pengeluaran_kas', JurnalPengeluaranKasController::class);
Route::resource('/pemasukan_kas', JurnalPemasukanKasController::class);
Route::resource('/buku_besar', BukuBesarController::class);
Route::resource('/wtb', WTBController::class);
Route::resource('/laba_rugi', LabaRugiController::class);
Route::resource('/posisi_keuangan', PosisiKeuanganController::class);
Route::resource('/calk', CALKController::class);
Route::resource('/form_permintaan_kas', FormPermintaanKasController::class);
Route::resource('/form_purchase_order', FormPurchaseOrderController::class);
Route::resource('/form_pengiriman_barang', FormPengirimanBarangController::class);
Route::resource('/invoice_penjualan_tunai', InvoicePenjualanTunaiController::class);
Route::resource('/invoice_penjualan_kredit', InvoicePenjualanKreditController::class);
Route::resource('/barang', BarangController::class);
Route::resource('/vendor', VendorController::class);




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

