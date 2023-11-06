<?php

namespace App\Http\Controllers;

use App\Models\NamaAkun;
use PDF;

class LaporanLabaRugiController extends Controller
{
    //
    public function index()
    {
        $data = $this->get_data_laporan_laba_rugi();

        $pdf = PDF::loadView('pdf.laba_rugi', $data);

        return $pdf->download('laporan-laba-rugi.pdf');
    }

    public function preview()
    {
        $data = $this->get_data_laporan_laba_rugi();

        return view('pdf.laba_rugi', $data);
    }

    /**
     * @return array
     */
    private function get_data_laporan_laba_rugi(): array
    {
        $company_id = auth()->user()->company->id;

        $saldo_akhir = auth()->user()->company->saldoakhir;

        $akuns_pendapatan = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [4000, 4999])
            ->where('saldo', '!=', 0)
            ->get();
        $total_pendapatan = 0;
        foreach ($akuns_pendapatan as $akun) {
            $total_pendapatan += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_pendapatan_lain = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [7000, 7199])
            ->where('saldo', '!=', 0)
            ->get();
        $total_pendapatan_lain = 0;
        foreach ($akuns_pendapatan_lain as $akun) {
            $total_pendapatan_lain += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_beban = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [6000, 6999])
            ->where('saldo', '!=', 0)
            ->get();
        $total_beban = 0;
        foreach ($akuns_beban as $akun) {
            $total_beban += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_beban_lain = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->where('nama_akuns.nama', '!=', 'Beban Pajak')
            ->whereBetween('detail_akun.kode_rekening', [7200, 7299])
            ->where('saldo', '!=', 0)
            ->get();
        $total_beban_lain = 0;
        foreach ($akuns_beban_lain as $akun) {
            $total_beban_lain += $akun->saldo + $akun->penyesuaian;
        }

        $beban_pajak_terkini = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [7202, 7202])
            ->where('saldo', '!=', 0)
            ->get();
        $total_beban_terkini = 0;
        foreach ($beban_pajak_terkini as $akun) {
            $total_beban_terkini += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_penyesuaian_debit = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('d_k', '!=', 'Debit')
            ->where('penyesuaian', '>', 0)
            ->get();
        $akuns_penyesuaian_kredit = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('d_k', '!=', 'Kredit')
            ->where('penyesuaian', '<', 0)
            ->get();

        $total_penyesuaian_debit = array_sum($akuns_penyesuaian_debit->pluck('penyesuaian')->toArray());
        $total_penyesuaian_kredit = array_sum($akuns_penyesuaian_kredit->pluck('penyesuaian')->toArray());
        $total_penyesuaian = $total_penyesuaian_debit - $total_penyesuaian_kredit;
        
        $total = [
            'pendapatan' => $total_pendapatan,
            'pendapatan_lain' => $total_pendapatan_lain,
            'beban' => $total_beban,
            'beban_lain' => $total_beban_lain,
            'beban_pajak_terkini' => $total_beban_terkini,
        ];

        $pendapatan_bersih_operasional = ($total['pendapatan'] - $total['beban']);
<<<<<<< Updated upstream
        $pendapatan_bersih = ($pendapatan_bersih_operasional) + ($total['pendapatan_lain'] - $total['beban_lain']);
=======
        $pendapatan_bersih = ($pendapatan_bersih_operasional) + ($total['pendapatan_lain'] - $total['beban_lain']) - ($total_penyesuaian);
>>>>>>> Stashed changes
        $pendapatan_setelah_pajak = $pendapatan_bersih - $total['beban_pajak_terkini'];

        return [
            'pendapatan' => formatRupiah($total['pendapatan']),
            'pendapatan_lain' => formatRupiah($total['pendapatan_lain']),
            'beban' => formatRupiah($total['beban']),
            'beban_lain' => formatRupiah($total['beban_lain']),
            'pendapatan_bersih_operasional' => formatRupiah($pendapatan_bersih_operasional),
            'pendapatan_bersih' => formatRupiah($pendapatan_bersih),
            'akuns_pendapatan' => $akuns_pendapatan,
            'akuns_pendapatan_lain' => $akuns_pendapatan_lain,
            'akuns_beban' => $akuns_beban,
            'akuns_beban_lain' => $akuns_beban_lain,
            'beban_pajak_terkini' => formatRupiah($total['beban_pajak_terkini']),
            'pendapatan_setelah_pajak' => $pendapatan_setelah_pajak,
        ];
    }
}
