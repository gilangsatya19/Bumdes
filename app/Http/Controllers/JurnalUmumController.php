<?php

namespace App\Http\Controllers;

use App\Models\BukuBesar;
use App\Models\DataJurnalUmum;
use App\Models\NamaAkun;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\JurnalUmum;
use Illuminate\Support\Facades\Storage;
class JurnalUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.jurnal_umum.index',[
            'jurnals' => auth()->user()->company->jurnalumums,
            'nama_akuns' => NamaAkun::all(),
            
        ]);
    }
    public function downloadImage($id)
    {
        $data = JurnalUmum::find($id);
        $foto = $data->bukti_pembayaran;
        return Storage::download($foto);
    }
    public function createNew(Request $request)
    {
        $request->validate([
            'bukti_pembayaran' => 'required|file|max:1024',
        ]);
        $jurnal_umum = new JurnalUmum;
        $jurnal_umum->tanggal = Carbon::parse($request->tanggal);
        $jurnal_umum->bukti_pembayaran = $request->file('bukti_pembayaran')->store('jurnal_umum');
        $jurnal_umum->jenis_transaksi = $request->jenis_transaksi;
        $jurnal_umum->company_id = auth()->user()->company->id;
        $jurnal_umum->save();
        session(['jurnal_umum_id' => $jurnal_umum->id]);
        return redirect('/jurnal_umum/create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.jurnal_umum.create',[
            'title' => 'Tambah Data',
            'method' => 'POST',
            'action' => 'jurnal_umum',
            'nama_akuns' => NamaAkun::all(),
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $akuns = NamaAkun::all();
        $data = new DataJurnalUmum;
        $data->nama_akun = $request->nama_akun;
        
        foreach ($akuns as $akun){
            if($data->nama_akun == $akun->nama){
                $data->noref = $akun->kode_rekening;
            }
        }
        
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->jurnal_umum_id = session('jurnal_umum_id');

        $data->save();

        $buku = auth()->user()->company->bukubesar;
        if($request->nama_akun == 'Kas')
        {
            $buku->kas = $buku->kas + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Kas di Bank A')
        {
            $buku->kas_di_bank_a = $buku->kas_di_bank_a + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Kas di Bank B')
        {
            $buku->kas_di_bank_b = $buku->kas_di_bank_b + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Kas di Bank C')
        {
            $buku->kas_di_bank_c = $buku->kas_di_bank_c + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Kas Kecil')
        {
            $buku->kas_kecil = $buku->kas_kecil + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Giro')
        {
            $buku->giro = $buku->giro + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Deposito')
        {
            $buku->deposito = $buku->deposito + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Piutang Usaha')
        {
            $buku->piutang_usaha = $buku->piutang_usaha + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Persediaan Barang Dagangan')
        {
            $buku->persediaan_barang_dagang = $buku->persediaan_barang_dagang + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Persediaan Makan dan Minuman')
        {
            $buku->persediaan_makan_dan_minuman = $buku->persediaan_makan_dan_minuman + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Perlengkapan')
        {
            $buku->perlengkapan = $buku->perlengkapan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Sewa Dibayar Dimuka')
        {
            $buku->sewa_dibayar_dimuka = $buku->sewa_dibayar_dimuka + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Asuransi Dibayar Dimuka')
        {
            $buku->asuransi_dibayar_dimuka = $buku->asuransi_dibayar_dimuka + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'PPh 25')
        {
            $buku->pph25 = $buku->pph25 + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Piutang Desa')
        {
            $buku->piutang_desa = $buku->piutang_desa + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Aset Lancar Lainnya')
        {
            $buku->aset_lancar_lainnya = $buku->aset_lancar_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Tanah')
        {
            $buku->tanah = $buku->tanah + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Gedung dan Bangunan')
        {
            $buku->gedung_dan_bangunan = $buku->gedung_dan_bangunan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Akumulasi Penyusutan Gedung dan Bangunan')
        {
            $buku->akumulasi_penyusutan_gedung_dan_bangunan = $buku->akumulasi_penyusutan_gedung_dan_bangunan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Peralatan dan Meubeliar')
        {
            $buku->peralatan_dan_meubeliar = $buku->peralatan_dan_meubeliar + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Akumulasi Penyusutan Peralatan dan Meubeliar')
        {
            $buku->akumulasi_penyusutan_peralatan_dan_meubeliar = $buku->akumulasi_penyusutan_peralatan_dan_meubeliar + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Kendaraan')
        {
            $buku->kendaraan = $buku->kendaraan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Akumulasi Penyusutan Kendaraan')
        {
            $buku->akumulasi_penyusutan_kendaraan = $buku->akumulasi_penyusutan_kendaraan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Aset Tetap Lainnya')
        {
            $buku->aset_tetap_lainnya = $buku->aset_tetap_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Utang Usaha')
        {
            $buku->utang_usaha = $buku->utang_usaha + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'PPn Keluaran')
        {
            $buku->ppn_keluaran = $buku->ppn_keluaran + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'PPh 21')
        {
            $buku->pph21 = $buku->pph21 + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'PPh 23')
        {
            $buku->pph23 = $buku->pph23 + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'PPh 29')
        {
            $buku->pph29 = $buku->pph29 + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Utang Gaji dan Tunjangan')
        {
            $buku->utang_gaji_dan_tunjangan = $buku->utang_gaji_dan_tunjangan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Utang Listrik')
        {
            $buku->utang_listrik = $buku->utang_listrik + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Utang Telepon dan Internet')
        {
            $buku->utang_telepon_dan_internet = $buku->utang_telepon_dan_internet + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Utang Utilitas Lainnya')
        {
            $buku->utang_ultilitas_lainnya = $buku->utang_ultilitas_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Utang Jangka Pendek Lainnya')
        {
            $buku->utang_jangka_pendek_lainnya = $buku->utang_jangka_pendek_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Utang Ke Bank')
        {
            $buku->utang_ke_bank = $buku->utang_ke_bank + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Utang Jangka Panjang Lainnya')
        {
            $buku->utang_jangka_panjang_lainnya = $buku->utang_jangka_panjang_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Penyertaan Modal Desa')
        {
            $buku->penyertaan_modal_desa = $buku->penyertaan_modal_desa + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Penyertaan Modal Masyarakat')
        {
            $buku->penyertaan_modal_masyarakat = $buku->penyertaan_modal_masyarakat + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Bagi Hasil Penyertaan Modal Desa')
        {
            $buku->bagi_hasil_penyertaan_modal_desa = $buku->bagi_hasil_penyertaan_modal_desa + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Bagi Hasil Penyertaan Modal Masyarakat')
        {
            $buku->bagi_hasil_penyertaan_modal_masyarakat = $buku->bagi_hasil_penyertaan_modal_masyarakat + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Laba Ditahan')
        {
            $buku->laba_ditahan = $buku->laba_ditahan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'RK Unit Usaha')
        {
            $buku->rk_unit_usaha = $buku->rk_unit_usaha + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'RK Unit Toko Desa')
        {
            $buku->rk_unit_toko_desa = $buku->rk_unit_toko_desa + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'RK Unit Rekreasi')
        {
            $buku->rk_unit_rekreasi = $buku->rk_unit_rekreasi + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Tiket Masuk Perseorangan')
        {
            $buku->pendapatan_tiket_masuk_perseorangan = $buku->pendapatan_tiket_masuk_perseorangan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Tiket Masuk Rombongan')
        {
            $buku->pendapatan_tiket_masuk_rombongan = $buku->pendapatan_tiket_masuk_rombongan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Tiket Lainnya')
        {
            $buku->pendapatan_tiket_lainnya = $buku->pendapatan_tiket_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Komisi')
        {
            $buku->pendapatan_komisi = $buku->pendapatan_komisi + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Parkir')
        {
            $buku->pendapatan_parkir = $buku->pendapatan_parkir + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Toilet')
        {
            $buku->pendapatan_toilet = $buku->pendapatan_toilet + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Sewa')
        {
            $buku->pendapatan_sewa = $buku->pendapatan_sewa + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Jasa')
        {
            $buku->pendapatan_jasa = $buku->pendapatan_jasa + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Rupa-rupa Lainnya')
        {
            $buku->pendapatan_rupa_rupa_lainnya = $buku->pendapatan_rupa_rupa_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Gaji dan Tunjangan')
        {
            $buku->beban_gaji_dan_tunjangan = $buku->beban_gaji_dan_tunjangan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Honor Lembur')
        {
            $buku->beban_honor_lembur = $buku->beban_honor_lembur + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Honor Narasumber')
        {
            $buku->beban_honor_narasumber = $buku->beban_honor_narasumber + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Insentif (Bonus)')
        {
            $buku->beban_insentif_bonus = $buku->beban_insentif_bonus + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Komisi')
        {
            $buku->beban_komisi = $buku->beban_komisi + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Seragam Pegawai')
        {
            $buku->beban_seragam_pegawai = $buku->beban_seragam_pegawai + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Listrik')
        {
            $buku->beban_listrik = $buku->beban_listrik + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Telepon dan Internet')
        {
            $buku->beban_telepon_dan_internet = $buku->beban_telepon_dan_internet + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Air')
        {
            $buku->beban_air = $buku->beban_air + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Utilitas Lainnya')
        {
            $buku->beban_ultilitas_lainnya = $buku->beban_ultilitas_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Transportasi')
        {
            $buku->beban_transportasi = $buku->beban_transportasi + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Parkir')
        {
            $buku->beban_parkir = $buku->beban_parkir + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Administrasi Bank')
        {
            $buku->beban_administrasi_bank = $buku->beban_administrasi_bank + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Keamanan')
        {
            $buku->beban_keamanan = $buku->beban_keamanan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Kebersihan')
        {
            $buku->beban_kebersihan = $buku->beban_kebersihan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban ATK')
        {
            $buku->beban_atk = $buku->beban_atk + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Perlengkapan Lainnya')
        {
            $buku->beban_perlengkapan_lainnya = $buku->beban_perlengkapan_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Fotocopy')
        {
            $buku->beban_fotocopy = $buku->beban_fotocopy + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Pemeliharaan dan Perbaikan')
        {
            $buku->beban_pemeliharaan_dan_perbaikan = $buku->beban_pemeliharaan_dan_perbaikan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Sewa')
        {
            $buku->beban_sewa = $buku->beban_sewa + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Asuransi')
        {
            $buku->beban_asuransi = $buku->beban_asuransi + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Konsumsi rapat')
        {
            $buku->beban_konsumsi_rapat = $buku->beban_konsumsi_rapat + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Perjalanan Dinas')
        {
            $buku->beban_perjalanan_dinas = $buku->beban_perjalanan_dinas + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Penyusutan Peralatan dan Meubeliar')
        {
            $buku->beban_penyusutan_peralatan_dan_meubeliar = $buku->beban_penyusutan_peralatan_dan_meubeliar + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Penyusutan Gedung dan Bangunan')
        {
            $buku->beban_penyusutan_gedung_dan_bangunan = $buku->beban_penyusutan_gedung_dan_bangunan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Penyusutan Kendaraan')
        {
            $buku->beban_penyusutan_kendaraan = $buku->beban_penyusutan_kendaraan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Pajak Air Permukaan')
        {
            $buku->beban_pajak_air_permukaan = $buku->beban_pajak_air_permukaan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Pajak Bunga Bank')
        {
            $buku->beban_pajak_bunga_bank = $buku->beban_pajak_bunga_bank + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Pajak Daerah')
        {
            $buku->beban_pajak_daerah = $buku->beban_pajak_daerah + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Pajak Hiburan')
        {
            $buku->beban_pajak_hiburan = $buku->beban_pajak_hiburan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Pajak Reklame')
        {
            $buku->beban_pajak_reklame = $buku->beban_pajak_reklame + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban PPh 21')
        {
            $buku->beban_pph21 = $buku->beban_pph21 + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban PPh 23')
        {
            $buku->beban_pph23 = $buku->beban_pph23 + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban PPh 25')
        {
            $buku->beban_pph25 = $buku->beban_pph25 + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban PPh 29')
        {
            $buku->beban_pph29 = $buku->beban_pph29 + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban PADes')
        {
            $buku->beban_pades = $buku->beban_pades + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Administrasi Umum dan Lainnya')
        {
            $buku->beban_administrasi_umum_dan_lainnya = $buku->beban_administrasi_umum_dan_lainnya + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Bunga')
        {
            $buku->pendapatan_bunga = $buku->pendapatan_bunga + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan dari Desa')
        {
            $buku->pendapatan_dari_desa = $buku->pendapatan_dari_desa + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Bantuan/Sumbangan/Hibah')
        {
            $buku->pendapatan_bantuan = $buku->pendapatan_bantuan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Pendapatan Lain-lain')
        {
            $buku->pendapatan_lain_lain = $buku->pendapatan_lain_lain + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Bunga')
        {
            $buku->beban_bunga = $buku->beban_bunga + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Pajak')
        {
            $buku->beban_pajak = $buku->beban_pajak + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Denda')
        {
            $buku->beban_denda = $buku->beban_denda + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Diskon')
        {
            $buku->beban_diskon = $buku->beban_diskon + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban yang Masih Harus Dibayar')
        {
            $buku->beban_yang_masih_harus_dibayar = $buku->beban_yang_masih_harus_dibayar + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Beban Lain-lainnya')
        {
            $buku->beban_lain_lainnya = $buku->beban_lain_lainnya + $request->debit - $request->kredit;
        }
        $buku->save();

        

        return redirect('/jurnal_umum/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('bumdes.dashboard.jurnal_umum.update',[
            'title' => 'Edit Data',
            'method' => 'PUT',
            'action' => 'jurnal_umum/'.$id,
            'nama_akuns' => NamaAkun::all(),
            'data' => DataJurnalUmum::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $akuns = NamaAkun::all();
        $data = DataJurnalUmum::find($id);
        $buku = auth()->user()->company->bukubesar;
        if ($request->nama_akun == $data->nama_akun) {
            $debit = $data->debit - $request->debit;
            $kredit = $data->kredit - $request->kredit;
            if($debit < 0){
            $debit = $debit * -1;
            }
            if($kredit < 0){
            $kredit = $kredit * -1;
            }
            if($request->nama_akun == 'Kas')
            {
                $buku->kas = $buku->kas + $debit - $kredit;
            }
            else if($request->nama_akun == 'Kas di Bank A')
            {
                $buku->kas_di_bank_a = $buku->kas_di_bank_a + $debit - $kredit;
            }
            else if($request->nama_akun == 'Kas di Bank B')
            {
                $buku->kas_di_bank_b = $buku->kas_di_bank_b + $debit - $kredit;
            }
            else if($request->nama_akun == 'Kas di Bank C')
            {
                $buku->kas_di_bank_c = $buku->kas_di_bank_c + $debit - $kredit;
            }
            else if($request->nama_akun == 'Kas Kecil')
            {
                $buku->kas_kecil = $buku->kas_kecil + $debit - $kredit;
            }
            else if($request->nama_akun == 'Giro')
            {
                $buku->giro = $buku->giro + $debit - $kredit;
            }
            else if($request->nama_akun == 'Deposito')
            {
                $buku->deposito = $buku->deposito + $debit - $kredit;
            }
            else if($request->nama_akun == 'Piutang Usaha')
            {
                $buku->piutang_usaha = $buku->piutang_usaha + $debit - $kredit;
            }
            else if($request->nama_akun == 'Persediaan Barang Dagangan')
            {
                $buku->persediaan_barang_dagang = $buku->persediaan_barang_dagang + $debit - $kredit;
            }
            else if($request->nama_akun == 'Persediaan Makan dan Minuman')
            {
                $buku->persediaan_makan_dan_minuman = $buku->persediaan_makan_dan_minuman + $debit - $kredit;
            }
            else if($request->nama_akun == 'Perlengkapan')
            {
                $buku->perlengkapan = $buku->perlengkapan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Sewa Dibayar Dimuka')
            {
                $buku->sewa_dibayar_dimuka = $buku->sewa_dibayar_dimuka + $debit - $kredit;
            }
            else if($request->nama_akun == 'Asuransi Dibayar Dimuka')
            {
                $buku->asuransi_dibayar_dimuka = $buku->asuransi_dibayar_dimuka + $debit - $kredit;
            }
            else if($request->nama_akun == 'PPh 25')
            {
                $buku->pph25 = $buku->pph25 + $debit - $kredit;
            }
            else if($request->nama_akun == 'Piutang Desa')
            {
                $buku->piutang_desa = $buku->piutang_desa + $debit - $kredit;
            }
            else if($request->nama_akun == 'Aset Lancar Lainnya')
            {
                $buku->aset_lancar_lainnya = $buku->aset_lancar_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Tanah')
            {
                $buku->tanah = $buku->tanah + $debit - $kredit;
            }
            else if($request->nama_akun == 'Gedung dan Bangunan')
            {
                $buku->gedung_dan_bangunan = $buku->gedung_dan_bangunan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Akumulasi Penyusutan Gedung dan Bangunan')
            {
                $buku->akumulasi_penyusutan_gedung_dan_bangunan = $buku->akumulasi_penyusutan_gedung_dan_bangunan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Peralatan dan Meubeliar')
            {
                $buku->peralatan_dan_meubeliar = $buku->peralatan_dan_meubeliar + $debit - $kredit;
            }
            else if($request->nama_akun == 'Akumulasi Penyusutan Peralatan dan Meubeliar')
            {
                $buku->akumulasi_penyusutan_peralatan_dan_meubeliar = $buku->akumulasi_penyusutan_peralatan_dan_meubeliar + $debit - $kredit;
            }
            else if($request->nama_akun == 'Kendaraan')
            {
                $buku->kendaraan = $buku->kendaraan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Akumulasi Penyusutan Kendaraan')
            {
                $buku->akumulasi_penyusutan_kendaraan = $buku->akumulasi_penyusutan_kendaraan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Aset Tetap Lainnya')
            {
                $buku->aset_tetap_lainnya = $buku->aset_tetap_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Utang Usaha')
            {
                $buku->utang_usaha = $buku->utang_usaha + $debit - $kredit;
            }
            else if($request->nama_akun == 'PPn Keluaran')
            {
                $buku->ppn_keluaran = $buku->ppn_keluaran + $debit - $kredit;
            }
            else if($request->nama_akun == 'PPh 21')
            {
                $buku->pph21 = $buku->pph21 + $debit - $kredit;
            }
            else if($request->nama_akun == 'PPh 23')
            {
                $buku->pph23 = $buku->pph23 + $debit - $kredit;
            }
            else if($request->nama_akun == 'PPh 29')
            {
                $buku->pph29 = $buku->pph29 + $debit - $kredit;
            }
            else if($request->nama_akun == 'Utang Gaji dan Tunjangan')
            {
                $buku->utang_gaji_dan_tunjangan = $buku->utang_gaji_dan_tunjangan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Utang Listrik')
            {
                $buku->utang_listrik = $buku->utang_listrik + $debit - $kredit;
            }
            else if($request->nama_akun == 'Utang Telepon dan Internet')
            {
                $buku->utang_telepon_dan_internet = $buku->utang_telepon_dan_internet + $debit - $kredit;
            }
            else if($request->nama_akun == 'Utang Utilitas Lainnya')
            {
                $buku->utang_ultilitas_lainnya = $buku->utang_ultilitas_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Utang Jangka Pendek Lainnya')
            {
                $buku->utang_jangka_pendek_lainnya = $buku->utang_jangka_pendek_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Utang Ke Bank')
            {
                $buku->utang_ke_bank = $buku->utang_ke_bank + $debit - $kredit;
            }
            else if($request->nama_akun == 'Utang Jangka Panjang Lainnya')
            {
                $buku->utang_jangka_panjang_lainnya = $buku->utang_jangka_panjang_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Penyertaan Modal Desa')
            {
                $buku->penyertaan_modal_desa = $buku->penyertaan_modal_desa + $debit - $kredit;
            }
            else if($request->nama_akun == 'Penyertaan Modal Masyarakat')
            {
                $buku->penyertaan_modal_masyarakat = $buku->penyertaan_modal_masyarakat + $debit - $kredit;
            }
            else if($request->nama_akun == 'Bagi Hasil Penyertaan Modal Desa')
            {
                $buku->bagi_hasil_penyertaan_modal_desa = $buku->bagi_hasil_penyertaan_modal_desa + $debit - $kredit;
            }
            else if($request->nama_akun == 'Bagi Hasil Penyertaan Modal Masyarakat')
            {
                $buku->bagi_hasil_penyertaan_modal_masyarakat = $buku->bagi_hasil_penyertaan_modal_masyarakat + $debit - $kredit;
            }
            else if($request->nama_akun == 'Laba Ditahan')
            {
                $buku->laba_ditahan = $buku->laba_ditahan + $debit - $kredit;
            }
            else if($request->nama_akun == 'RK Unit Usaha')
            {
                $buku->rk_unit_usaha = $buku->rk_unit_usaha + $debit - $kredit;
            }
            else if($request->nama_akun == 'RK Unit Toko Desa')
            {
                $buku->rk_unit_toko_desa = $buku->rk_unit_toko_desa + $debit - $kredit;
            }
            else if($request->nama_akun == 'RK Unit Rekreasi')
            {
                $buku->rk_unit_rekreasi = $buku->rk_unit_rekreasi + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Tiket Masuk Perseorangan')
            {
                $buku->pendapatan_tiket_masuk_perseorangan = $buku->pendapatan_tiket_masuk_perseorangan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Tiket Masuk Rombongan')
            {
                $buku->pendapatan_tiket_masuk_rombongan = $buku->pendapatan_tiket_masuk_rombongan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Tiket Lainnya')
            {
                $buku->pendapatan_tiket_lainnya = $buku->pendapatan_tiket_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Komisi')
            {
                $buku->pendapatan_komisi = $buku->pendapatan_komisi + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Parkir')
            {
                $buku->pendapatan_parkir = $buku->pendapatan_parkir + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Toilet')
            {
                $buku->pendapatan_toilet = $buku->pendapatan_toilet + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Sewa')
            {
                $buku->pendapatan_sewa = $buku->pendapatan_sewa + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Jasa')
            {
                $buku->pendapatan_jasa = $buku->pendapatan_jasa + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Rupa-rupa Lainnya')
            {
                $buku->pendapatan_rupa_rupa_lainnya = $buku->pendapatan_rupa_rupa_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Gaji dan Tunjangan')
            {
                $buku->beban_gaji_dan_tunjangan = $buku->beban_gaji_dan_tunjangan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Honor Lembur')
            {
                $buku->beban_honor_lembur = $buku->beban_honor_lembur + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Honor Narasumber')
            {
                $buku->beban_honor_narasumber = $buku->beban_honor_narasumber + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Insentif (Bonus)')
            {
                $buku->beban_insentif_bonus = $buku->beban_insentif_bonus + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Komisi')
            {
                $buku->beban_komisi = $buku->beban_komisi + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Seragam Pegawai')
            {
                $buku->beban_seragam_pegawai = $buku->beban_seragam_pegawai + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Listrik')
            {
                $buku->beban_listrik = $buku->beban_listrik + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Telepon dan Internet')
            {
                $buku->beban_telepon_dan_internet = $buku->beban_telepon_dan_internet + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Air')
            {
                $buku->beban_air = $buku->beban_air + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Utilitas Lainnya')
            {
                $buku->beban_ultilitas_lainnya = $buku->beban_ultilitas_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Transportasi')
            {
                $buku->beban_transportasi = $buku->beban_transportasi + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Parkir')
            {
                $buku->beban_parkir = $buku->beban_parkir + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Administrasi Bank')
            {
                $buku->beban_administrasi_bank = $buku->beban_administrasi_bank + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Keamanan')
            {
                $buku->beban_keamanan = $buku->beban_keamanan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Kebersihan')
            {
                $buku->beban_kebersihan = $buku->beban_kebersihan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban ATK')
            {
                $buku->beban_atk = $buku->beban_atk + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Perlengkapan Lainnya')
            {
                $buku->beban_perlengkapan_lainnya = $buku->beban_perlengkapan_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Fotocopy')
            {
                $buku->beban_fotocopy = $buku->beban_fotocopy + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Pemeliharaan dan Perbaikan')
            {
                $buku->beban_pemeliharaan_dan_perbaikan = $buku->beban_pemeliharaan_dan_perbaikan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Sewa')
            {
                $buku->beban_sewa = $buku->beban_sewa + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Asuransi')
            {
                $buku->beban_asuransi = $buku->beban_asuransi + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Konsumsi rapat')
            {
                $buku->beban_konsumsi_rapat = $buku->beban_konsumsi_rapat + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Perjalanan Dinas')
            {
                $buku->beban_perjalanan_dinas = $buku->beban_perjalanan_dinas + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Penyusutan Peralatan dan Meubeliar')
            {
                $buku->beban_penyusutan_peralatan_dan_meubeliar = $buku->beban_penyusutan_peralatan_dan_meubeliar + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Penyusutan Gedung dan Bangunan')
            {
                $buku->beban_penyusutan_gedung_dan_bangunan = $buku->beban_penyusutan_gedung_dan_bangunan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Penyusutan Kendaraan')
            {
                $buku->beban_penyusutan_kendaraan = $buku->beban_penyusutan_kendaraan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Air Permukaan')
            {
                $buku->beban_pajak_air_permukaan = $buku->beban_pajak_air_permukaan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Bunga Bank')
            {
                $buku->beban_pajak_bunga_bank = $buku->beban_pajak_bunga_bank + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Daerah')
            {
                $buku->beban_pajak_daerah = $buku->beban_pajak_daerah + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Hiburan')
            {
                $buku->beban_pajak_hiburan = $buku->beban_pajak_hiburan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Reklame')
            {
                $buku->beban_pajak_reklame = $buku->beban_pajak_reklame + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban PPh 21')
            {
                $buku->beban_pph21 = $buku->beban_pph21 + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban PPh 23')
            {
                $buku->beban_pph23 = $buku->beban_pph23 + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban PPh 25')
            {
                $buku->beban_pph25 = $buku->beban_pph25 + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban PPh 29')
            {
                $buku->beban_pph29 = $buku->beban_pph29 + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban PADes')
            {
                $buku->beban_pades = $buku->beban_pades + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Administrasi Umum dan Lainnya')
            {
                $buku->beban_administrasi_umum_dan_lainnya = $buku->beban_administrasi_umum_dan_lainnya + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Bunga')
            {
                $buku->pendapatan_bunga = $buku->pendapatan_bunga + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan dari Desa')
            {
                $buku->pendapatan_dari_desa = $buku->pendapatan_dari_desa + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Bantuan/Sumbangan/Hibah')
            {
                $buku->pendapatan_bantuan = $buku->pendapatan_bantuan + $debit - $kredit;
            }
            else if($request->nama_akun == 'Pendapatan Lain-lain')
            {
                $buku->pendapatan_lain_lain = $buku->pendapatan_lain_lain + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Bunga')
            {
                $buku->beban_bunga = $buku->beban_bunga + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Pajak')
            {
                $buku->beban_pajak = $buku->beban_pajak + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Denda')
            {
                $buku->beban_denda = $buku->beban_denda + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Diskon')
            {
                $buku->beban_diskon = $buku->beban_diskon + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban yang Masih Harus Dibayar')
            {
                $buku->beban_yang_masih_harus_dibayar = $buku->beban_yang_masih_harus_dibayar + $debit - $kredit;
            }
            else if($request->nama_akun == 'Beban Lain-lainnya')
            {
                $buku->beban_lain_lainnya = $buku->beban_lain_lainnya + $debit - $kredit;
            }
            
        }else if ($request->nama_akun != $data->nama_akun) {
            $data->nama_akun = $request->nama_akun;
            foreach ($akuns as $akun){
                if($data->nama_akun == $akun->nama){
                    $data->noref = $akun->kode_rekening;
                }
            }
            if($request->nama_akun == 'Kas')
            {
                $buku->kas = $buku->kas + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Kas di Bank A')
            {
                $buku->kas_di_bank_a = $buku->kas_di_bank_a + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Kas di Bank B')
            {
                $buku->kas_di_bank_b = $buku->kas_di_bank_b + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Kas di Bank C')
            {
                $buku->kas_di_bank_c = $buku->kas_di_bank_c + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Kas Kecil')
            {
                $buku->kas_kecil = $buku->kas_kecil + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Giro')
            {
                $buku->giro = $buku->giro + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Deposito')
            {
                $buku->deposito = $buku->deposito + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Piutang Usaha')
            {
                $buku->piutang_usaha = $buku->piutang_usaha + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Persediaan Barang Dagangan')
            {
                $buku->persediaan_barang_dagang = $buku->persediaan_barang_dagang + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Persediaan Makan dan Minuman')
            {
                $buku->persediaan_makan_dan_minuman = $buku->persediaan_makan_dan_minuman + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Perlengkapan')
            {
                $buku->perlengkapan = $buku->perlengkapan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Sewa Dibayar Dimuka')
            {
                $buku->sewa_dibayar_dimuka = $buku->sewa_dibayar_dimuka + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Asuransi Dibayar Dimuka')
            {
                $buku->asuransi_dibayar_dimuka = $buku->asuransi_dibayar_dimuka + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'PPh 25')
            {
                $buku->pph25 = $buku->pph25 + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Piutang Desa')
            {
                $buku->piutang_desa = $buku->piutang_desa + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Aset Lancar Lainnya')
            {
                $buku->aset_lancar_lainnya = $buku->aset_lancar_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Tanah')
            {
                $buku->tanah = $buku->tanah + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Gedung dan Bangunan')
            {
                $buku->gedung_dan_bangunan = $buku->gedung_dan_bangunan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Akumulasi Penyusutan Gedung dan Bangunan')
            {
                $buku->akumulasi_penyusutan_gedung_dan_bangunan = $buku->akumulasi_penyusutan_gedung_dan_bangunan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Peralatan dan Meubeliar')
            {
                $buku->peralatan_dan_meubeliar = $buku->peralatan_dan_meubeliar + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Akumulasi Penyusutan Peralatan dan Meubeliar')
            {
                $buku->akumulasi_penyusutan_peralatan_dan_meubeliar = $buku->akumulasi_penyusutan_peralatan_dan_meubeliar + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Kendaraan')
            {
                $buku->kendaraan = $buku->kendaraan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Akumulasi Penyusutan Kendaraan')
            {
                $buku->akumulasi_penyusutan_kendaraan = $buku->akumulasi_penyusutan_kendaraan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Aset Tetap Lainnya')
            {
                $buku->aset_tetap_lainnya = $buku->aset_tetap_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Utang Usaha')
            {
                $buku->utang_usaha = $buku->utang_usaha + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'PPn Keluaran')
            {
                $buku->ppn_keluaran = $buku->ppn_keluaran + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'PPh 21')
            {
                $buku->pph21 = $buku->pph21 + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'PPh 23')
            {
                $buku->pph23 = $buku->pph23 + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'PPh 29')
            {
                $buku->pph29 = $buku->pph29 + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Utang Gaji dan Tunjangan')
            {
                $buku->utang_gaji_dan_tunjangan = $buku->utang_gaji_dan_tunjangan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Utang Listrik')
            {
                $buku->utang_listrik = $buku->utang_listrik + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Utang Telepon dan Internet')
            {
                $buku->utang_telepon_dan_internet = $buku->utang_telepon_dan_internet + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Utang Utilitas Lainnya')
            {
                $buku->utang_ultilitas_lainnya = $buku->utang_ultilitas_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Utang Jangka Pendek Lainnya')
            {
                $buku->utang_jangka_pendek_lainnya = $buku->utang_jangka_pendek_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Utang Ke Bank')
            {
                $buku->utang_ke_bank = $buku->utang_ke_bank + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Utang Jangka Panjang Lainnya')
            {
                $buku->utang_jangka_panjang_lainnya = $buku->utang_jangka_panjang_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Penyertaan Modal Desa')
            {
                $buku->penyertaan_modal_desa = $buku->penyertaan_modal_desa + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Penyertaan Modal Masyarakat')
            {
                $buku->penyertaan_modal_masyarakat = $buku->penyertaan_modal_masyarakat + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Bagi Hasil Penyertaan Modal Desa')
            {
                $buku->bagi_hasil_penyertaan_modal_desa = $buku->bagi_hasil_penyertaan_modal_desa + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Bagi Hasil Penyertaan Modal Masyarakat')
            {
                $buku->bagi_hasil_penyertaan_modal_masyarakat = $buku->bagi_hasil_penyertaan_modal_masyarakat + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Laba Ditahan')
            {
                $buku->laba_ditahan = $buku->laba_ditahan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'RK Unit Usaha')
            {
                $buku->rk_unit_usaha = $buku->rk_unit_usaha + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'RK Unit Toko Desa')
            {
                $buku->rk_unit_toko_desa = $buku->rk_unit_toko_desa + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'RK Unit Rekreasi')
            {
                $buku->rk_unit_rekreasi = $buku->rk_unit_rekreasi + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Tiket Masuk Perseorangan')
            {
                $buku->pendapatan_tiket_masuk_perseorangan = $buku->pendapatan_tiket_masuk_perseorangan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Tiket Masuk Rombongan')
            {
                $buku->pendapatan_tiket_masuk_rombongan = $buku->pendapatan_tiket_masuk_rombongan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Tiket Lainnya')
            {
                $buku->pendapatan_tiket_lainnya = $buku->pendapatan_tiket_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Komisi')
            {
                $buku->pendapatan_komisi = $buku->pendapatan_komisi + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Parkir')
            {
                $buku->pendapatan_parkir = $buku->pendapatan_parkir + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Toilet')
            {
                $buku->pendapatan_toilet = $buku->pendapatan_toilet + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Sewa')
            {
                $buku->pendapatan_sewa = $buku->pendapatan_sewa + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Jasa')
            {
                $buku->pendapatan_jasa = $buku->pendapatan_jasa + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Rupa-rupa Lainnya')
            {
                $buku->pendapatan_rupa_rupa_lainnya = $buku->pendapatan_rupa_rupa_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Gaji dan Tunjangan')
            {
                $buku->beban_gaji_dan_tunjangan = $buku->beban_gaji_dan_tunjangan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Honor Lembur')
            {
                $buku->beban_honor_lembur = $buku->beban_honor_lembur + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Honor Narasumber')
            {
                $buku->beban_honor_narasumber = $buku->beban_honor_narasumber + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Insentif (Bonus)')
            {
                $buku->beban_insentif_bonus = $buku->beban_insentif_bonus + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Komisi')
            {
                $buku->beban_komisi = $buku->beban_komisi + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Seragam Pegawai')
            {
                $buku->beban_seragam_pegawai = $buku->beban_seragam_pegawai + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Listrik')
            {
                $buku->beban_listrik = $buku->beban_listrik + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Telepon dan Internet')
            {
                $buku->beban_telepon_dan_internet = $buku->beban_telepon_dan_internet + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Air')
            {
                $buku->beban_air = $buku->beban_air + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Utilitas Lainnya')
            {
                $buku->beban_ultilitas_lainnya = $buku->beban_ultilitas_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Transportasi')
            {
                $buku->beban_transportasi = $buku->beban_transportasi + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Parkir')
            {
                $buku->beban_parkir = $buku->beban_parkir + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Administrasi Bank')
            {
                $buku->beban_administrasi_bank = $buku->beban_administrasi_bank + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Keamanan')
            {
                $buku->beban_keamanan = $buku->beban_keamanan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Kebersihan')
            {
                $buku->beban_kebersihan = $buku->beban_kebersihan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban ATK')
            {
                $buku->beban_atk = $buku->beban_atk + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Perlengkapan Lainnya')
            {
                $buku->beban_perlengkapan_lainnya = $buku->beban_perlengkapan_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Fotocopy')
            {
                $buku->beban_fotocopy = $buku->beban_fotocopy + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Pemeliharaan dan Perbaikan')
            {
                $buku->beban_pemeliharaan_dan_perbaikan = $buku->beban_pemeliharaan_dan_perbaikan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Sewa')
            {
                $buku->beban_sewa = $buku->beban_sewa + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Asuransi')
            {
                $buku->beban_asuransi = $buku->beban_asuransi + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Konsumsi rapat')
            {
                $buku->beban_konsumsi_rapat = $buku->beban_konsumsi_rapat + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Perjalanan Dinas')
            {
                $buku->beban_perjalanan_dinas = $buku->beban_perjalanan_dinas + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Penyusutan Peralatan dan Meubeliar')
            {
                $buku->beban_penyusutan_peralatan_dan_meubeliar = $buku->beban_penyusutan_peralatan_dan_meubeliar + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Penyusutan Gedung dan Bangunan')
            {
                $buku->beban_penyusutan_gedung_dan_bangunan = $buku->beban_penyusutan_gedung_dan_bangunan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Penyusutan Kendaraan')
            {
                $buku->beban_penyusutan_kendaraan = $buku->beban_penyusutan_kendaraan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Air Permukaan')
            {
                $buku->beban_pajak_air_permukaan = $buku->beban_pajak_air_permukaan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Bunga Bank')
            {
                $buku->beban_pajak_bunga_bank = $buku->beban_pajak_bunga_bank + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Daerah')
            {
                $buku->beban_pajak_daerah = $buku->beban_pajak_daerah + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Hiburan')
            {
                $buku->beban_pajak_hiburan = $buku->beban_pajak_hiburan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Pajak Reklame')
            {
                $buku->beban_pajak_reklame = $buku->beban_pajak_reklame + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban PPh 21')
            {
                $buku->beban_pph21 = $buku->beban_pph21 + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban PPh 23')
            {
                $buku->beban_pph23 = $buku->beban_pph23 + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban PPh 25')
            {
                $buku->beban_pph25 = $buku->beban_pph25 + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban PPh 29')
            {
                $buku->beban_pph29 = $buku->beban_pph29 + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban PADes')
            {
                $buku->beban_pades = $buku->beban_pades + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Administrasi Umum dan Lainnya')
            {
                $buku->beban_administrasi_umum_dan_lainnya = $buku->beban_administrasi_umum_dan_lainnya + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Bunga')
            {
                $buku->pendapatan_bunga = $buku->pendapatan_bunga + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan dari Desa')
            {
                $buku->pendapatan_dari_desa = $buku->pendapatan_dari_desa + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Bantuan/Sumbangan/Hibah')
            {
                $buku->pendapatan_bantuan = $buku->pendapatan_bantuan + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Pendapatan Lain-lain')
            {
                $buku->pendapatan_lain_lain = $buku->pendapatan_lain_lain + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Bunga')
            {
                $buku->beban_bunga = $buku->beban_bunga + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Pajak')
            {
                $buku->beban_pajak = $buku->beban_pajak + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Denda')
            {
                $buku->beban_denda = $buku->beban_denda + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Diskon')
            {
                $buku->beban_diskon = $buku->beban_diskon + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban yang Masih Harus Dibayar')
            {
                $buku->beban_yang_masih_harus_dibayar = $buku->beban_yang_masih_harus_dibayar + $request->debit - $request->kredit;
            }
            else if($request->nama_akun == 'Beban Lain-lainnya')
            {
                $buku->beban_lain_lainnya = $buku->beban_lain_lainnya + $request->debit - $request->kredit;
            }
        }
        $buku->save();
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->save();
        return redirect('/jurnal_umum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurnal = JurnalUmum::find($id);
        $buku = auth()->user()->company->bukubesar;
        foreach($jurnal->datas as $data)
        {
            
            if($data->nama_akun == 'Kas')
            {
                $buku->kas = $buku->kas - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Kas di Bank A')
            {
                $buku->kas_di_bank_a = $buku->kas_di_bank_a - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Kas di Bank B')
            {
                $buku->kas_di_bank_b = $buku->kas_di_bank_b - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Kas di Bank C')
            {
                $buku->kas_di_bank_c = $buku->kas_di_bank_c - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Kas Kecil')
            {
                $buku->kas_kecil = $buku->kas_kecil - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Giro')
            {
                $buku->giro = $buku->giro - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Deposito')
            {
                $buku->deposito = $buku->deposito - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Piutang Usaha')
            {
                $buku->piutang_usaha = $buku->piutang_usaha - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Persediaan Barang Dagangan')
            {
                $buku->persediaan_barang_dagang = $buku->persediaan_barang_dagang - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Persediaan Makan dan Minuman')
            {
                $buku->persediaan_makan_dan_minuman = $buku->persediaan_makan_dan_minuman - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Perlengkapan')
            {
                $buku->perlengkapan = $buku->perlengkapan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Sewa Dibayar Dimuka')
            {
                $buku->sewa_dibayar_dimuka = $buku->sewa_dibayar_dimuka - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Asuransi Dibayar Dimuka')
            {
                $buku->asuransi_dibayar_dimuka = $buku->asuransi_dibayar_dimuka - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'PPh 25')
            {
                $buku->pph25 = $buku->pph25 - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Piutang Desa')
            {
                $buku->piutang_desa = $buku->piutang_desa - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Aset Lancar Lainnya')
            {
                $buku->aset_lancar_lainnya = $buku->aset_lancar_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Tanah')
            {
                $buku->tanah = $buku->tanah - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Gedung dan Bangunan')
            {
                $buku->gedung_dan_bangunan = $buku->gedung_dan_bangunan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Akumulasi Penyusutan Gedung dan Bangunan')
            {
                $buku->akumulasi_penyusutan_gedung_dan_bangunan = $buku->akumulasi_penyusutan_gedung_dan_bangunan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Peralatan dan Meubeliar')
            {
                $buku->peralatan_dan_meubeliar = $buku->peralatan_dan_meubeliar - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Akumulasi Penyusutan Peralatan dan Meubeliar')
            {
                $buku->akumulasi_penyusutan_peralatan_dan_meubeliar = $buku->akumulasi_penyusutan_peralatan_dan_meubeliar - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Kendaraan')
            {
                $buku->kendaraan = $buku->kendaraan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Akumulasi Penyusutan Kendaraan')
            {
                $buku->akumulasi_penyusutan_kendaraan = $buku->akumulasi_penyusutan_kendaraan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Aset Tetap Lainnya')
            {
                $buku->aset_tetap_lainnya = $buku->aset_tetap_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Utang Usaha')
            {
                $buku->utang_usaha = $buku->utang_usaha - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'PPn Keluaran')
            {
                $buku->ppn_keluaran = $buku->ppn_keluaran - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'PPh 21')
            {
                $buku->pph21 = $buku->pph21 - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'PPh 23')
            {
                $buku->pph23 = $buku->pph23 - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'PPh 29')
            {
                $buku->pph29 = $buku->pph29 - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Utang Gaji dan Tunjangan')
            {
                $buku->utang_gaji_dan_tunjangan = $buku->utang_gaji_dan_tunjangan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Utang Listrik')
            {
                $buku->utang_listrik = $buku->utang_listrik - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Utang Telepon dan Internet')
            {
                $buku->utang_telepon_dan_internet = $buku->utang_telepon_dan_internet - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Utang Utilitas Lainnya')
            {
                $buku->utang_ultilitas_lainnya = $buku->utang_ultilitas_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Utang Jangka Pendek Lainnya')
            {
                $buku->utang_jangka_pendek_lainnya = $buku->utang_jangka_pendek_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Utang Ke Bank')
            {
                $buku->utang_ke_bank = $buku->utang_ke_bank - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Utang Jangka Panjang Lainnya')
            {
                $buku->utang_jangka_panjang_lainnya = $buku->utang_jangka_panjang_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Penyertaan Modal Desa')
            {
                $buku->penyertaan_modal_desa = $buku->penyertaan_modal_desa - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Penyertaan Modal Masyarakat')
            {
                $buku->penyertaan_modal_masyarakat = $buku->penyertaan_modal_masyarakat - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Bagi Hasil Penyertaan Modal Desa')
            {
                $buku->bagi_hasil_penyertaan_modal_desa = $buku->bagi_hasil_penyertaan_modal_desa - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Bagi Hasil Penyertaan Modal Masyarakat')
            {
                $buku->bagi_hasil_penyertaan_modal_masyarakat = $buku->bagi_hasil_penyertaan_modal_masyarakat - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Laba Ditahan')
            {
                $buku->laba_ditahan = $buku->laba_ditahan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'RK Unit Usaha')
            {
                $buku->rk_unit_usaha = $buku->rk_unit_usaha - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'RK Unit Toko Desa')
            {
                $buku->rk_unit_toko_desa = $buku->rk_unit_toko_desa - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'RK Unit Rekreasi')
            {
                $buku->rk_unit_rekreasi = $buku->rk_unit_rekreasi - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Tiket Masuk Perseorangan')
            {
                $buku->pendapatan_tiket_masuk_perseorangan = $buku->pendapatan_tiket_masuk_perseorangan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Tiket Masuk Rombongan')
            {
                $buku->pendapatan_tiket_masuk_rombongan = $buku->pendapatan_tiket_masuk_rombongan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Tiket Lainnya')
            {
                $buku->pendapatan_tiket_lainnya = $buku->pendapatan_tiket_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Komisi')
            {
                $buku->pendapatan_komisi = $buku->pendapatan_komisi - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Parkir')
            {
                $buku->pendapatan_parkir = $buku->pendapatan_parkir - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Toilet')
            {
                $buku->pendapatan_toilet = $buku->pendapatan_toilet - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Sewa')
            {
                $buku->pendapatan_sewa = $buku->pendapatan_sewa - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Jasa')
            {
                $buku->pendapatan_jasa = $buku->pendapatan_jasa - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Rupa-rupa Lainnya')
            {
                $buku->pendapatan_rupa_rupa_lainnya = $buku->pendapatan_rupa_rupa_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Gaji dan Tunjangan')
            {
                $buku->beban_gaji_dan_tunjangan = $buku->beban_gaji_dan_tunjangan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Honor Lembur')
            {
                $buku->beban_honor_lembur = $buku->beban_honor_lembur - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Honor Narasumber')
            {
                $buku->beban_honor_narasumber = $buku->beban_honor_narasumber - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Insentif (Bonus)')
            {
                $buku->beban_insentif_bonus = $buku->beban_insentif_bonus - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Komisi')
            {
                $buku->beban_komisi = $buku->beban_komisi - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Seragam Pegawai')
            {
                $buku->beban_seragam_pegawai = $buku->beban_seragam_pegawai - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Listrik')
            {
                $buku->beban_listrik = $buku->beban_listrik - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Telepon dan Internet')
            {
                $buku->beban_telepon_dan_internet = $buku->beban_telepon_dan_internet - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Air')
            {
                $buku->beban_air = $buku->beban_air - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Utilitas Lainnya')
            {
                $buku->beban_ultilitas_lainnya = $buku->beban_ultilitas_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Transportasi')
            {
                $buku->beban_transportasi = $buku->beban_transportasi - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Parkir')
            {
                $buku->beban_parkir = $buku->beban_parkir - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Administrasi Bank')
            {
                $buku->beban_administrasi_bank = $buku->beban_administrasi_bank - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Keamanan')
            {
                $buku->beban_keamanan = $buku->beban_keamanan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Kebersihan')
            {
                $buku->beban_kebersihan = $buku->beban_kebersihan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban ATK')
            {
                $buku->beban_atk = $buku->beban_atk - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Perlengkapan Lainnya')
            {
                $buku->beban_perlengkapan_lainnya = $buku->beban_perlengkapan_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Fotocopy')
            {
                $buku->beban_fotocopy = $buku->beban_fotocopy - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Pemeliharaan dan Perbaikan')
            {
                $buku->beban_pemeliharaan_dan_perbaikan = $buku->beban_pemeliharaan_dan_perbaikan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Sewa')
            {
                $buku->beban_sewa = $buku->beban_sewa - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Asuransi')
            {
                $buku->beban_asuransi = $buku->beban_asuransi - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Konsumsi rapat')
            {
                $buku->beban_konsumsi_rapat = $buku->beban_konsumsi_rapat - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Perjalanan Dinas')
            {
                $buku->beban_perjalanan_dinas = $buku->beban_perjalanan_dinas - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Penyusutan Peralatan dan Meubeliar')
            {
                $buku->beban_penyusutan_peralatan_dan_meubeliar = $buku->beban_penyusutan_peralatan_dan_meubeliar - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Penyusutan Gedung dan Bangunan')
            {
                $buku->beban_penyusutan_gedung_dan_bangunan = $buku->beban_penyusutan_gedung_dan_bangunan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Penyusutan Kendaraan')
            {
                $buku->beban_penyusutan_kendaraan = $buku->beban_penyusutan_kendaraan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Pajak Air Permukaan')
            {
                $buku->beban_pajak_air_permukaan = $buku->beban_pajak_air_permukaan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Pajak Bunga Bank')
            {
                $buku->beban_pajak_bunga_bank = $buku->beban_pajak_bunga_bank - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Pajak Daerah')
            {
                $buku->beban_pajak_daerah = $buku->beban_pajak_daerah - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Pajak Hiburan')
            {
                $buku->beban_pajak_hiburan = $buku->beban_pajak_hiburan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Pajak Reklame')
            {
                $buku->beban_pajak_reklame = $buku->beban_pajak_reklame - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban PPh 21')
            {
                $buku->beban_pph21 = $buku->beban_pph21 - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban PPh 23')
            {
                $buku->beban_pph23 = $buku->beban_pph23 - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban PPh 25')
            {
                $buku->beban_pph25 = $buku->beban_pph25 - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban PPh 29')
            {
                $buku->beban_pph29 = $buku->beban_pph29 - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban PADes')
            {
                $buku->beban_pades = $buku->beban_pades - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Administrasi Umum dan Lainnya')
            {
                $buku->beban_administrasi_umum_dan_lainnya = $buku->beban_administrasi_umum_dan_lainnya - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Bunga')
            {
                $buku->pendapatan_bunga = $buku->pendapatan_bunga - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan dari Desa')
            {
                $buku->pendapatan_dari_desa = $buku->pendapatan_dari_desa - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Bantuan/Sumbangan/Hibah')
            {
                $buku->pendapatan_bantuan = $buku->pendapatan_bantuan - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Pendapatan Lain-lain')
            {
                $buku->pendapatan_lain_lain = $buku->pendapatan_lain_lain - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Bunga')
            {
                $buku->beban_bunga = $buku->beban_bunga - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Pajak')
            {
                $buku->beban_pajak = $buku->beban_pajak - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Denda')
            {
                $buku->beban_denda = $buku->beban_denda - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Diskon')
            {
                $buku->beban_diskon = $buku->beban_diskon - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban yang Masih Harus Dibayar')
            {
                $buku->beban_yang_masih_harus_dibayar = $buku->beban_yang_masih_harus_dibayar - $data->debit - $data->kredit;
            }
            else if($data->nama_akun == 'Beban Lain-lainnya')
            {
                $buku->beban_lain_lainnya = $buku->beban_lain_lainnya - $data->debit - $data->kredit;
            }
            $buku->save();
            $data->delete();
        }
        Storage::delete($jurnal->bukti_pembayaran);
        $jurnal->delete();
        return redirect('/jurnal_umum')->with('msg', 'sukses');
    }
}
