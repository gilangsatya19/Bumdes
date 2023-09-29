<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\BukuBesar;
use App\Models\Penyesuaian;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard_admin.create_company.index',[
            'title' => 'Tambah ',
            'method' => 'POST',
            'action' => 'create_company/create',
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
        $request->validate([
            'nama' => 'required|unique:companies',
            'email' => 'required|email:dns|unique:companies',
            'no_hp' => 'required|unique:companies|min:11',
        ]);
        
        $data = new Company;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->save();

        $buku = new BukuBesar;
        $buku->kas = '0';
        $buku->kas_di_bank_a = '0';
        $buku->kas_di_bank_b = '0';
        $buku->kas_di_bank_c = '0';
        $buku->kas_kecil = '0';
        $buku->giro = '0';
        $buku->deposito = '0';
        $buku->piutang_usaha = '0';
        $buku->persediaan_barang_dagang = '0';
        $buku->persediaan_makan_dan_minuman = '0';
        $buku->perlengkapan = '0';
        $buku->sewa_dibayar_dimuka = '0';
        $buku->asuransi_dibayar_dimuka = '0';
        $buku->pph25 = '0';
        $buku->piutang_desa = '0';
        $buku->aset_lancar_lainnya = '0';
        $buku->tanah = '0';
        $buku->gedung_dan_bangunan = '0';
        $buku->akumulasi_penyusutan_gedung_dan_bangunan = '0';
        $buku->peralatan_dan_meubeliar = '0';
        $buku->akumulasi_penyusutan_peralatan_dan_meubeliar = '0';
        $buku->kendaraan = '0';
        $buku->akumulasi_penyusutan_kendaraan = '0';
        $buku->aset_tetap_lainnya = '0';
        $buku->utang_usaha = '0';
        $buku->ppn_keluaran = '0';
        $buku->pph21 = '0';
        $buku->pph23 = '0';
        $buku->pph29 = '0';
        $buku->utang_gaji_dan_tunjangan = '0';
        $buku->utang_listrik = '0';
        $buku->utang_telepon_dan_internet = '0';
        $buku->utang_ultilitas_lainnya = '0';
        $buku->utang_jangka_pendek_lainnya = '0';
        $buku->utang_ke_bank = '0';
        $buku->utang_jangka_panjang_lainnya = '0';
        $buku->penyertaan_modal_desa = '0';
        $buku->penyertaan_modal_masyarakat = '0';
        $buku->bagi_hasil_penyertaan_modal_desa = '0';
        $buku->bagi_hasil_penyertaan_modal_masyarakat = '0';
        $buku->laba_ditahan = '0';
        $buku->rk_unit_usaha = '0';
        $buku->rk_unit_toko_desa = '0';
        $buku->rk_unit_rekreasi = '0';
        $buku->pendapatan_tiket_masuk_perseorangan = '0';
        $buku->pendapatan_tiket_masuk_rombongan = '0';
        $buku->pendapatan_tiket_lainnya = '0';
        $buku->pendapatan_komisi = '0';
        $buku->pendapatan_parkir = '0';
        $buku->pendapatan_toilet = '0';
        $buku->pendapatan_sewa = '0';
        $buku->pendapatan_jasa = '0';
        $buku->pendapatan_rupa_rupa_lainnya = '0';
        $buku->beban_gaji_dan_tunjangan = '0';
        $buku->beban_honor_lembur = '0';
        $buku->beban_honor_narasumber = '0';
        $buku->beban_insentif_bonus = '0';
        $buku->beban_komisi = '0';
        $buku->beban_seragam_pegawai = '0';
        $buku->beban_listrik = '0';
        $buku->beban_telepon_dan_internet = '0';
        $buku->beban_air = '0';
        $buku->beban_ultilitas_lainnya = '0';
        $buku->beban_transportasi = '0';
        $buku->beban_parkir = '0';
        $buku->beban_administrasi_bank = '0';
        $buku->beban_keamanan = '0';
        $buku->beban_kebersihan = '0';
        $buku->beban_atk = '0';
        $buku->beban_perlengkapan_lainnya = '0';
        $buku->beban_fotocopy = '0';
        $buku->beban_pemeliharaan_dan_perbaikan = '0';
        $buku->beban_sewa = '0';
        $buku->beban_asuransi = '0';
        $buku->beban_konsumsi_rapat = '0';
        $buku->beban_perjalanan_dinas = '0';
        $buku->beban_penyusutan_peralatan_dan_meubeliar = '0';
        $buku->beban_penyusutan_gedung_dan_bangunan = '0';
        $buku->beban_penyusutan_kendaraan = '0';
        $buku->beban_pajak_air_permukaan = '0';
        $buku->beban_pajak_bunga_bank = '0';
        $buku->beban_pajak_daerah = '0';
        $buku->beban_pajak_hiburan = '0';
        $buku->beban_pajak_reklame = '0';
        $buku->beban_pph21 = '0';
        $buku->beban_pph23 = '0';
        $buku->beban_pph25 = '0';
        $buku->beban_pph29 = '0';
        $buku->beban_pades = '0';
        $buku->beban_administrasi_umum_dan_lainnya = '0';
        $buku->pendapatan_bunga = '0';
        $buku->pendapatan_dari_desa = '0';
        $buku->pendapatan_bantuan = '0';
        $buku->pendapatan_lain_lain = '0';
        $buku->beban_bunga = '0';
        $buku->beban_pajak = '0';
        $buku->beban_denda = '0';
        $buku->beban_diskon = '0';
        $buku->beban_yang_masih_harus_dibayar = '0';
        $buku->beban_lain_lainnya = '0';
        $buku->company_id = $data->id;
        $buku->save();

        $penyesuaian = new Penyesuaian;
        $penyesuaian->kas = '0';
        $penyesuaian->kas_di_bank_a = '0';
        $penyesuaian->kas_di_bank_b = '0';
        $penyesuaian->kas_di_bank_c = '0';
        $penyesuaian->kas_kecil = '0';
        $penyesuaian->giro = '0';
        $penyesuaian->deposito = '0';
        $penyesuaian->piutang_usaha = '0';
        $penyesuaian->persediaan_barang_dagang = '0';
        $penyesuaian->persediaan_makan_dan_minuman = '0';
        $penyesuaian->perlengkapan = '0';
        $penyesuaian->sewa_dibayar_dimuka = '0';
        $penyesuaian->asuransi_dibayar_dimuka = '0';
        $penyesuaian->pph25 = '0';
        $penyesuaian->piutang_desa = '0';
        $penyesuaian->aset_lancar_lainnya = '0';
        $penyesuaian->tanah = '0';
        $penyesuaian->gedung_dan_bangunan = '0';
        $penyesuaian->akumulasi_penyusutan_gedung_dan_bangunan = '0';
        $penyesuaian->peralatan_dan_meubeliar = '0';
        $penyesuaian->akumulasi_penyusutan_peralatan_dan_meubeliar = '0';
        $penyesuaian->kendaraan = '0';
        $penyesuaian->akumulasi_penyusutan_kendaraan = '0';
        $penyesuaian->aset_tetap_lainnya = '0';
        $penyesuaian->utang_usaha = '0';
        $penyesuaian->ppn_keluaran = '0';
        $penyesuaian->pph21 = '0';
        $penyesuaian->pph23 = '0';
        $penyesuaian->pph29 = '0';
        $penyesuaian->utang_gaji_dan_tunjangan = '0';
        $penyesuaian->utang_listrik = '0';
        $penyesuaian->utang_telepon_dan_internet = '0';
        $penyesuaian->utang_ultilitas_lainnya = '0';
        $penyesuaian->utang_jangka_pendek_lainnya = '0';
        $penyesuaian->utang_ke_bank = '0';
        $penyesuaian->utang_jangka_panjang_lainnya = '0';
        $penyesuaian->penyertaan_modal_desa = '0';
        $penyesuaian->penyertaan_modal_masyarakat = '0';
        $penyesuaian->bagi_hasil_penyertaan_modal_desa = '0';
        $penyesuaian->bagi_hasil_penyertaan_modal_masyarakat = '0';
        $penyesuaian->laba_ditahan = '0';
        $penyesuaian->rk_unit_usaha = '0';
        $penyesuaian->rk_unit_toko_desa = '0';
        $penyesuaian->rk_unit_rekreasi = '0';
        $penyesuaian->pendapatan_tiket_masuk_perseorangan = '0';
        $penyesuaian->pendapatan_tiket_masuk_rombongan = '0';
        $penyesuaian->pendapatan_tiket_lainnya = '0';
        $penyesuaian->pendapatan_komisi = '0';
        $penyesuaian->pendapatan_parkir = '0';
        $penyesuaian->pendapatan_toilet = '0';
        $penyesuaian->pendapatan_sewa = '0';
        $penyesuaian->pendapatan_jasa = '0';
        $penyesuaian->pendapatan_rupa_rupa_lainnya = '0';
        $penyesuaian->beban_gaji_dan_tunjangan = '0';
        $penyesuaian->beban_honor_lembur = '0';
        $penyesuaian->beban_honor_narasumber = '0';
        $penyesuaian->beban_insentif_bonus = '0';
        $penyesuaian->beban_komisi = '0';
        $penyesuaian->beban_seragam_pegawai = '0';
        $penyesuaian->beban_listrik = '0';
        $penyesuaian->beban_telepon_dan_internet = '0';
        $penyesuaian->beban_air = '0';
        $penyesuaian->beban_ultilitas_lainnya = '0';
        $penyesuaian->beban_transportasi = '0';
        $penyesuaian->beban_parkir = '0';
        $penyesuaian->beban_administrasi_bank = '0';
        $penyesuaian->beban_keamanan = '0';
        $penyesuaian->beban_kebersihan = '0';
        $penyesuaian->beban_atk = '0';
        $penyesuaian->beban_perlengkapan_lainnya = '0';
        $penyesuaian->beban_fotocopy = '0';
        $penyesuaian->beban_pemeliharaan_dan_perbaikan = '0';
        $penyesuaian->beban_sewa = '0';
        $penyesuaian->beban_asuransi = '0';
        $penyesuaian->beban_konsumsi_rapat = '0';
        $penyesuaian->beban_perjalanan_dinas = '0';
        $penyesuaian->beban_penyusutan_peralatan_dan_meubeliar = '0';
        $penyesuaian->beban_penyusutan_gedung_dan_bangunan = '0';
        $penyesuaian->beban_penyusutan_kendaraan = '0';
        $penyesuaian->beban_pajak_air_permukaan = '0';
        $penyesuaian->beban_pajak_bunga_bank = '0';
        $penyesuaian->beban_pajak_daerah = '0';
        $penyesuaian->beban_pajak_hiburan = '0';
        $penyesuaian->beban_pajak_reklame = '0';
        $penyesuaian->beban_pph21 = '0';
        $penyesuaian->beban_pph23 = '0';
        $penyesuaian->beban_pph25 = '0';
        $penyesuaian->beban_pph29 = '0';
        $penyesuaian->beban_pades = '0';
        $penyesuaian->beban_administrasi_umum_dan_lainnya = '0';
        $penyesuaian->pendapatan_bunga = '0';
        $penyesuaian->pendapatan_dari_desa = '0';
        $penyesuaian->pendapatan_bantuan = '0';
        $penyesuaian->pendapatan_lain_lain = '0';
        $penyesuaian->beban_bunga = '0';
        $penyesuaian->beban_pajak = '0';
        $penyesuaian->beban_denda = '0';
        $penyesuaian->beban_diskon = '0';
        $penyesuaian->beban_yang_masih_harus_dibayar = '0';
        $penyesuaian->beban_lain_lainnya = '0';
        $penyesuaian->company_id = $data->id;
        $penyesuaian->save();

        return redirect('/dashboard_admin');
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
        return view('bumdes.dashboard_admin.create_company.index',[
            'title' => 'Ubah ',
            'method' => 'POST',
            'action' => 'create_company/'.$id.'/update',
            'data' => Company::find($id),
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
        $data = Company::find($id);
        $data->nama = $request->nama;
        
        $data->save();
        return redirect('/dashboard_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Company::find($id);
        $data->delete();
        return redirect('/dashboard_admin')->with('msg', 'delete sukses');
    }
}
