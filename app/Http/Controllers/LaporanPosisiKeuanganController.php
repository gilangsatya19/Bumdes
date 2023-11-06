<?php

namespace App\Http\Controllers;

use App\Models\NamaAkun;
use Illuminate\Http\Request;
use PDF;

class LaporanPosisiKeuanganController extends Controller
{
    public function index()
    {
        $data = $this->get_data_laporan_posisi_keuangan();

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.posisi_keuangan', $data);

        return $pdf->download('laporan-posisi-keuangan.pdf');
    }

    public function preview()
    {
        $data = $this->get_data_laporan_posisi_keuangan();

        return view('pdf.posisi_keuangan', $data);
    }

    private function get_data_laporan_posisi_keuangan()
    {

        $akuns_aset_lancar = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [1100, 1199])
            ->get();
        $total_aset_lancar = 0;
        foreach ($akuns_aset_lancar as $akun) {
            $total_aset_lancar += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_investasi = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [1200, 1299])
            ->get();
        $total_investasi = 0;
        foreach ($akuns_investasi as $akun) {
            $total_investasi += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_aset_tetap = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [1300, 1399])
            ->get();

        $total_aset_tetap = 0;
        foreach ($akuns_aset_tetap as $akun) {
            if ($akun->kode_rekening != 1303 && $akun->kode_rekening != 1305 && $akun->kode_rekening != 1307) {
                $total_aset_tetap += $akun->saldo + $akun->penyesuaian;
            }else{
                $total_aset_tetap -= (($akun->saldo - $akun->penyesuaian) * -1);
            }
        }
        
        $akuns_kewajiban_pendek = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [2100, 2110])
            ->get();

        $total_kewajiban_pendek = 0;
        foreach ($akuns_kewajiban_pendek as $akun) {
            $total_kewajiban_pendek += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_kewajiban_panjang = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [2111, 2199])
            ->get();
        $total_kewajiban_panjang = 0;
        foreach ($akuns_kewajiban_panjang as $akun) {
            $total_kewajiban_panjang += $akun->saldo + $akun->penyesuaian;
        }
        $akuns_equitas = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->where('saldo', '!=', 0)
            ->whereBetween('detail_akun.kode_rekening', [3000, 3299])
            ->get();
        $total_equitas = 0;
        foreach ($akuns_equitas as $akun) {
            $total_equitas += $akun->saldo + $akun->penyesuaian;
        }
        // $akuns_penyesuaian_debit = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
        //     ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
        //     ->where('d_k', '!=', 'Debit')
        //     ->where('penyesuaian', '>', 0)
        //     ->get();
        // $akuns_penyesuaian_kredit = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
        //     ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
        //     ->where('d_k', '!=', 'Kredit')
        //     ->where('penyesuaian', '<', 0)
        //     ->get();

<<<<<<< Updated upstream
        $saldo_akhir = auth()->user()->company->saldoakhir;
        $cadangan = $saldo_akhir->pendapatan_bersih;

        $total_equitas = array_sum($akuns_equitas->pluck('saldo')->toArray());
        $total_kewajiban_pendek = array_sum($akuns_kewajiban_pendek->pluck('saldo')->toArray());
        $total_kewajiban_panjang = array_sum($akuns_kewajiban_panjang->pluck('saldo')->toArray());
        $total_aset_lancar = array_sum($akuns_aset_lancar->pluck('saldo')->toArray());
        $total_investasi = array_sum($akuns_investasi->pluck('saldo')->toArray());


        $total_aset_tetap = 0;
        foreach ($akuns_aset_tetap as $akun) {
            if ($akun->kode_rekening != 1303 && $akun->kode_rekening != 1305 && $akun->kode_rekening != 1307){
                $total_aset_tetap += $akun->saldo;
            }else {
                $total_aset_tetap -= $akun->saldo;
            }
=======
        // $total_penyesuaian_debit = array_sum($akuns_penyesuaian_debit->pluck('penyesuaian')->toArray());
        // $total_penyesuaian_kredit = array_sum($akuns_penyesuaian_kredit->pluck('penyesuaian')->toArray());
        // $total_penyesuaian = $total_penyesuaian_debit - $total_penyesuaian_kredit;
        $akuns_pendapatan = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->whereBetween('detail_akun.kode_rekening', [4000, 4999])
            ->get();
        $total_pendapatan = 0;
        foreach ($akuns_pendapatan as $akun) {
            $total_pendapatan += $akun->saldo + $akun->penyesuaian;
>>>>>>> Stashed changes
        }

        $akuns_pendapatan_lain = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->whereBetween('detail_akun.kode_rekening', [7000, 7199])
            ->get();
        $total_pendapatan_lain = 0;
        foreach ($akuns_pendapatan_lain as $akun) {
            $total_pendapatan_lain += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_beban = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->whereBetween('detail_akun.kode_rekening', [6000, 6999])
            ->get();
        $total_beban = 0;
        foreach ($akuns_beban as $akun) {
            $total_beban += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_beban_lain = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->whereBetween('detail_akun.kode_rekening', [7200, 7299])
            ->get();
        $total_beban_lain = 0;
        foreach ($akuns_beban_lain as $akun) {
            $total_beban_lain += $akun->saldo + $akun->penyesuaian;
        }
        
        $total_pendapatan_all = $total_pendapatan + $total_pendapatan_lain;
        $total_beban_all = $total_beban + $total_beban_lain;
        $total_cadangan = $total_pendapatan_all - $total_beban_all;

        $saldo_akhir = auth()->user()->company->saldoakhir;
        $cadangan = $total_cadangan;


        

        $total_aset = $total_aset_lancar + $total_investasi + $total_aset_tetap;

        $data = [
            'akuns_aset_lancar' => $akuns_aset_lancar,
            'akuns_investasi' => $akuns_investasi,
            'akuns_aset_tetap' => $akuns_aset_tetap,
            'akuns_kewajiban_pendek' => $akuns_kewajiban_pendek,
            'akuns_kewajiban_panjang' => $akuns_kewajiban_panjang,
            'akuns_equitas' => $akuns_equitas,
            'cadangan' => $cadangan,
            'total_aset' => $total_aset,
            'total_aset_lancar' => $total_aset_lancar,
            'total_investasi' => $total_investasi,
            'total_aset_tetap' => $total_aset_tetap,
            'total_equitas' => $total_equitas,
            'total_kewajiban_pendek' => $total_kewajiban_pendek,
            'total_kewajiban_panjang' => $total_kewajiban_panjang,
            'total_equitas_kewajiban_cadangan' => $total_equitas + $total_kewajiban_pendek + $total_kewajiban_panjang + $cadangan
        ];

        //        dd($data);

        return $data;
    }
}
