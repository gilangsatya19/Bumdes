<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyesuaian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->float('kas', 12, 2);
            $table->float('kas_di_bank_a', 12, 2);
            $table->float('kas_di_bank_b', 12, 2);
            $table->float('kas_di_bank_c', 12, 2);
            $table->float('kas_kecil', 12, 2);
            $table->float('giro', 12, 2);
            $table->float('deposito', 12, 2);
            $table->float('piutang_usaha', 12, 2);
            $table->float('persediaan_barang_dagang', 12, 2);
            $table->float('persediaan_makan_dan_minuman', 12, 2);
            $table->float('perlengkapan', 12, 2);
            $table->float('sewa_dibayar_dimuka', 12, 2);
            $table->float('asuransi_dibayar_dimuka', 12, 2);
            $table->float('pph25', 12, 2);
            $table->float('piutang_desa', 12, 2);
            $table->float('aset_lancar_lainnya', 12, 2);
            $table->float('tanah', 12, 2);
            $table->float('gedung_dan_bangunan', 12, 2);
            $table->float('akumulasi_penyusutan_gedung_dan_bangunan', 12, 2);
            $table->float('peralatan_dan_meubeliar', 12, 2);
            $table->float('akumulasi_penyusutan_peralatan_dan_meubeliar', 12, 2);
            $table->float('kendaraan', 12, 2);
            $table->float('akumulasi_penyusutan_kendaraan', 12, 2);
            $table->float('aset_tetap_lainnya', 12, 2);
            $table->float('utang_usaha', 12, 2);
            $table->float('ppn_keluaran', 12, 2);
            $table->float('pph21', 12, 2);
            $table->float('pph23', 12, 2);
            $table->float('pph29', 12, 2);
            $table->float('utang_gaji_dan_tunjangan', 12, 2);
            $table->float('utang_listrik', 12, 2);
            $table->float('utang_telepon_dan_internet', 12, 2);
            $table->float('utang_ultilitas_lainnya', 12, 2);
            $table->float('utang_jangka_pendek_lainnya', 12, 2);
            $table->float('utang_ke_bank', 12, 2);
            $table->float('utang_jangka_panjang_lainnya', 12, 2);
            $table->float('penyertaan_modal_desa', 12, 2);
            $table->float('penyertaan_modal_masyarakat', 12, 2);
            $table->float('bagi_hasil_penyertaan_modal_desa', 12, 2);
            $table->float('bagi_hasil_penyertaan_modal_masyarakat', 12, 2);
            $table->float('laba_ditahan', 12, 2);
            $table->float('rk_unit_usaha', 12, 2);
            $table->float('rk_unit_toko_desa', 12, 2);
            $table->float('rk_unit_rekreasi', 12, 2);
            $table->float('pendapatan_tiket_masuk_perseorangan', 12, 2);
            $table->float('pendapatan_tiket_masuk_rombongan', 12, 2);
            $table->float('pendapatan_tiket_lainnya', 12, 2);
            $table->float('pendapatan_komisi', 12, 2);
            $table->float('pendapatan_parkir', 12, 2);
            $table->float('pendapatan_toilet', 12, 2);
            $table->float('pendapatan_sewa', 12, 2);
            $table->float('pendapatan_jasa', 12, 2);
            $table->float('pendapatan_rupa_rupa_lainnya', 12, 2);
            $table->float('beban_gaji_dan_tunjangan', 12, 2);
            $table->float('beban_honor_lembur', 12, 2);
            $table->float('beban_honor_narasumber', 12, 2);
            $table->float('beban_insentif_bonus', 12, 2);
            $table->float('beban_komisi', 12, 2);
            $table->float('beban_seragam_pegawai', 12, 2);
            $table->float('beban_listrik', 12, 2);
            $table->float('beban_telepon_dan_internet', 12, 2);
            $table->float('beban_air', 12, 2);
            $table->float('beban_ultilitas_lainnya', 12, 2);
            $table->float('beban_transportasi', 12, 2);
            $table->float('beban_parkir', 12, 2);
            $table->float('beban_administrasi_bank', 12, 2);
            $table->float('beban_keamanan', 12, 2);
            $table->float('beban_kebersihan', 12, 2);
            $table->float('beban_atk', 12, 2);
            $table->float('beban_perlengkapan_lainnya', 12, 2);
            $table->float('beban_fotocopy', 12, 2);
            $table->float('beban_pemeliharaan_dan_perbaikan', 12, 2);
            $table->float('beban_sewa', 12, 2);
            $table->float('beban_asuransi', 12, 2);
            $table->float('beban_konsumsi_rapat', 12, 2);
            $table->float('beban_perjalanan_dinas', 12, 2);
            $table->float('beban_penyusutan_peralatan_dan_meubeliar', 12, 2);
            $table->float('beban_penyusutan_gedung_dan_bangunan', 12, 2);
            $table->float('beban_penyusutan_kendaraan', 12, 2);
            $table->float('beban_pajak_air_permukaan', 12, 2);
            $table->float('beban_pajak_bunga_bank', 12, 2);
            $table->float('beban_pajak_daerah', 12, 2);
            $table->float('beban_pajak_hiburan', 12, 2);
            $table->float('beban_pajak_reklame', 12, 2);
            $table->float('beban_pph21', 12, 2);
            $table->float('beban_pph23', 12, 2);
            $table->float('beban_pph25', 12, 2);
            $table->float('beban_pph29', 12, 2);
            $table->float('beban_pades', 12, 2);
            $table->float('beban_administrasi_umum_dan_lainnya', 12, 2);
            $table->float('pendapatan_bunga', 12, 2);
            $table->float('pendapatan_dari_desa', 12, 2);
            $table->float('pendapatan_bantuan', 12, 2);
            $table->float('pendapatan_lain_lain', 12, 2);
            $table->float('beban_bunga', 12, 2);
            $table->float('beban_pajak', 12, 2);
            $table->float('beban_denda', 12, 2);
            $table->float('beban_diskon', 12, 2);
            $table->float('beban_yang_masih_harus_dibayar', 12, 2);
            $table->float('beban_lain_lainnya', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyesuaian');
    }
};
