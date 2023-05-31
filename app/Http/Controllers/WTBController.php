<?php

namespace App\Http\Controllers;

use App\Models\NamaAkun;
use App\Models\Penyesuaian;
use Illuminate\Http\Request;
use App\Models\DataJurnalUmum;

class WTBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $nama_akun = NamaAkun::all();
        // $i = 0;
        
        // $data = DataJurnalUmum::get()
        //     ->groupBy('nama_akun')
        //     ->map(function($item){
        //         $kredit = $item->sum('kredit');
        //         $debit = $item->sum('debit');
        //         return [
        //             'saldo' => $debit - $kredit,
        //         ];
        //     });
        
        // dd($data->toArray());
        // $saldo = auth()->user()->company->bukubesar;
        
        // return view('bumdes.dashboard.wtb.index', compact('saldo', 'nama_akun', 'i'));
        return view('bumdes.dashboard.wtb.index', [
            'nama_akun' => NamaAkun::all(),
            'i' => 0,
            'saldo' => auth()->user()->company->bukubesar,
            'penyesuaian' => auth()->user()->company->penyesuaian,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($akun)
    {
        return view('bumdes.dashboard.wtb.update',[
            'title' => 'Ubah',
            'method' => 'PUT',
            'action' => 'wtb/'.$akun.'/update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $akun)
    {
        $data = Penyesuaian::find(auth()->user()->company->penyesuaian->id);
        if($akun == 'Kas')
        {
            $data->kas = $request->debit - $request->kredit;
        }
        else if($akun == 'Kas di Bank A')
        {
            $data->kas_di_bank_a = $request->debit - $request->kredit;
        }
        else if($akun == 'Kas di Bank B')
        {
            $data->kas_di_bank_b = $request->debit - $request->kredit;
        }
        else if($akun == 'Kas di Bank C')
        {
            $data->kas_di_bank_c = $request->debit - $request->kredit;
        }
        else if($akun == 'Kas Kecil')
        {
            $data->kas_kecil = $request->debit - $request->kredit;
        }
        else if($akun == 'Giro')
        {
            $data->giro = $request->debit - $request->kredit;
        }
        else if($akun == 'Deposito')
        {
            $data->deposito = $request->debit - $request->kredit;
        }
        else if($akun == 'Piutang Usaha')
        {
            $data->piutang_usaha = $request->debit - $request->kredit;
        }
        else if($akun == 'Persediaan Barang Dagangan')
        {
            $data->persediaan_barang_dagang = $request->debit - $request->kredit;
        }
        else if($akun == 'Persediaan Makan dan Minuman')
        {
            $data->persediaan_makan_dan_minuman = $request->debit - $request->kredit;
        }
        else if($akun == 'Perlengkapan')
        {
            $data->perlengkapan = $request->debit - $request->kredit;
        }
        else if($akun == 'Sewa Dibayar Dimuka')
        {
            $data->sewa_dibayar_dimuka = $request->debit - $request->kredit;
        }
        else if($akun == 'Asuransi Dibayar Dimuka')
        {
            $data->asuransi_dibayar_dimuka = $request->debit - $request->kredit;
        }
        else if($akun == 'PPh 25')
        {
            $data->pph25 = $request->debit - $request->kredit;
        }
        else if($akun == 'Piutang Desa')
        {
            $data->piutang_desa = $request->debit - $request->kredit;
        }
        else if($akun == 'Aset Lancar Lainnya')
        {
            $data->aset_lancar_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Tanah')
        {
            $data->tanah = $request->debit - $request->kredit;
        }
        else if($akun == 'Gedung dan Bangunan')
        {
            $data->gedung_dan_bangunan = $request->debit - $request->kredit;
        }
        else if($akun == 'Akumulasi Penyusutan Gedung dan Bangunan')
        {
            $data->akumulasi_penyusutan_gedung_dan_bangunan = $request->debit - $request->kredit;
        }
        else if($akun == 'Peralatan dan Meubeliar')
        {
            $data->peralatan_dan_meubeliar = $request->debit - $request->kredit;
        }
        else if($akun == 'Akumulasi Penyusutan Peralatan dan Meubeliar')
        {
            $data->akumulasi_penyusutan_peralatan_dan_meubeliar = $request->debit - $request->kredit;
        }
        else if($akun == 'Kendaraan')
        {
            $data->kendaraan = $request->debit - $request->kredit;
        }
        else if($akun == 'Akumulasi Penyusutan Kendaraan')
        {
            $data->akumulasi_penyusutan_kendaraan = $request->debit - $request->kredit;
        }
        else if($akun == 'Aset Tetap Lainnya')
        {
            $data->aset_tetap_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Utang Usaha')
        {
            $data->utang_usaha = $request->debit - $request->kredit;
        }
        else if($akun == 'PPn Keluaran')
        {
            $data->ppn_keluaran = $request->debit - $request->kredit;
        }
        else if($akun == 'PPh 21')
        {
            $data->pph21 = $request->debit - $request->kredit;
        }
        else if($akun == 'PPh 23')
        {
            $data->pph23 = $request->debit - $request->kredit;
        }
        else if($akun == 'PPh 29')
        {
            $data->pph29 = $request->debit - $request->kredit;
        }
        else if($akun == 'Utang Gaji dan Tunjangan')
        {
            $data->utang_gaji_dan_tunjangan = $request->debit - $request->kredit;
        }
        else if($akun == 'Utang Listrik')
        {
            $data->utang_listrik = $request->debit - $request->kredit;
        }
        else if($akun == 'Utang Telepon dan Internet')
        {
            $data->utang_telepon_dan_internet = $request->debit - $request->kredit;
        }
        else if($akun == 'Utang Utilitas Lainnya')
        {
            $data->utang_ultilitas_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Utang Jangka Pendek Lainnya')
        {
            $data->utang_jangka_pendek_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Utang Ke Bank')
        {
            $data->utang_ke_bank = $request->debit - $request->kredit;
        }
        else if($akun == 'Utang Jangka Panjang Lainnya')
        {
            $data->utang_jangka_panjang_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Penyertaan Modal Desa')
        {
            $data->penyertaan_modal_desa = $request->debit - $request->kredit;
        }
        else if($akun == 'Penyertaan Modal Masyarakat')
        {
            $data->penyertaan_modal_masyarakat = $request->debit - $request->kredit;
        }
        else if($akun == 'Bagi Hasil Penyertaan Modal Desa')
        {
            $data->bagi_hasil_penyertaan_modal_desa = $request->debit - $request->kredit;
        }
        else if($akun == 'Bagi Hasil Penyertaan Modal Masyarakat')
        {
            $data->bagi_hasil_penyertaan_modal_masyarakat = $request->debit - $request->kredit;
        }
        else if($akun == 'Laba Ditahan')
        {
            $data->laba_ditahan = $request->debit - $request->kredit;
        }
        else if($akun == 'RK Unit Usaha')
        {
            $data->rk_unit_usaha = $request->debit - $request->kredit;
        }
        else if($akun == 'RK Unit Toko Desa')
        {
            $data->rk_unit_toko_desa = $request->debit - $request->kredit;
        }
        else if($akun == 'RK Unit Rekreasi')
        {
            $data->rk_unit_rekreasi = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Tiket Masuk Perseorangan')
        {
            $data->pendapatan_tiket_masuk_perseorangan = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Tiket Masuk Rombongan')
        {
            $data->pendapatan_tiket_masuk_rombongan = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Tiket Lainnya')
        {
            $data->pendapatan_tiket_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Komisi')
        {
            $data->pendapatan_komisi = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Parkir')
        {
            $data->pendapatan_parkir = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Toilet')
        {
            $data->pendapatan_toilet = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Sewa')
        {
            $data->pendapatan_sewa = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Jasa')
        {
            $data->pendapatan_jasa = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Rupa-rupa Lainnya')
        {
            $data->pendapatan_rupa_rupa_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Gaji dan Tunjangan')
        {
            $data->beban_gaji_dan_tunjangan = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Honor Lembur')
        {
            $data->beban_honor_lembur = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Honor Narasumber')
        {
            $data->beban_honor_narasumber = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Insentif (Bonus)')
        {
            $data->beban_insentif_bonus = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Komisi')
        {
            $data->beban_komisi = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Seragam Pegawai')
        {
            $data->beban_seragam_pegawai = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Listrik')
        {
            $data->beban_listrik = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Telepon dan Internet')
        {
            $data->beban_telepon_dan_internet = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Air')
        {
            $data->beban_air = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Utilitas Lainnya')
        {
            $data->beban_ultilitas_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Transportasi')
        {
            $data->beban_transportasi = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Parkir')
        {
            $data->beban_parkir = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Administrasi Bank')
        {
            $data->beban_administrasi_bank = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Keamanan')
        {
            $data->beban_keamanan = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Kebersihan')
        {
            $data->beban_kebersihan = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban ATK')
        {
            $data->beban_atk = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Perlengkapan Lainnya')
        {
            $data->beban_perlengkapan_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Fotocopy')
        {
            $data->beban_fotocopy = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Pemeliharaan dan Perbaikan')
        {
            $data->beban_pemeliharaan_dan_perbaikan = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Sewa')
        {
            $data->beban_sewa = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Asuransi')
        {
            $data->beban_asuransi = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Konsumsi rapat')
        {
            $data->beban_konsumsi_rapat = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Perjalanan Dinas')
        {
            $data->beban_perjalanan_dinas = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Penyusutan Peralatan dan Meubeliar')
        {
            $data->beban_penyusutan_peralatan_dan_meubeliar = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Penyusutan Gedung dan Bangunan')
        {
            $data->beban_penyusutan_gedung_dan_bangunan = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Penyusutan Kendaraan')
        {
            $data->beban_penyusutan_kendaraan = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Pajak Air Permukaan')
        {
            $data->beban_pajak_air_permukaan = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Pajak Bunga Bank')
        {
            $data->beban_pajak_bunga_bank = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Pajak Daerah')
        {
            $data->beban_pajak_daerah = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Pajak Hiburan')
        {
            $data->beban_pajak_hiburan = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Pajak Reklame')
        {
            $data->beban_pajak_reklame = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban PPh 21')
        {
            $data->beban_pph21 = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban PPh 23')
        {
            $data->beban_pph23 = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban PPh 25')
        {
            $data->beban_pph25 = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban PPh 29')
        {
            $data->beban_pph29 = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban PADes')
        {
            $data->beban_pades = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Administrasi Umum dan Lainnya')
        {
            $data->beban_administrasi_umum_dan_lainnya = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Bunga')
        {
            $data->pendapatan_bunga = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan dari Desa')
        {
            $data->pendapatan_dari_desa = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Bantuan/Sumbangan/Hibah')
        {
            $data->pendapatan_bantuan = $request->debit - $request->kredit;
        }
        else if($akun == 'Pendapatan Lain-lain')
        {
            $data->pendapatan_lain_lain = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Bunga')
        {
            $data->beban_bunga = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Pajak')
        {
            $data->beban_pajak = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Denda')
        {
            $data->beban_denda = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Diskon')
        {
            $data->beban_diskon = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban yang Masih Harus Dibayar')
        {
            $data->beban_yang_masih_harus_dibayar = $request->debit - $request->kredit;
        }
        else if($akun == 'Beban Lain-lainnya')
        {
            $data->beban_lain_lainnya = $request->debit - $request->kredit;
        }
        $data->save();
        return redirect('/wtb');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
