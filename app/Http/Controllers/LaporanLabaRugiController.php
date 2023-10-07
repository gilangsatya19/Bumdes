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
            ->whereBetween('detail_akun.kode_rekening', [7000, 7199])
            ->orWhereBetween('detail_akun.kode_rekening', [4000, 4999])
            ->get();

        $akuns_beban = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [6000, 6999])
            ->orWhereBetween('detail_akun.kode_rekening', [7200, 7299])
            ->get();

        return [
            'pendapatan' => formatRupiah($saldo_akhir->pendapatan),
            'beban' => formatRupiah($saldo_akhir->beban),
            'pendapatan_bersih' => formatRupiah($saldo_akhir->pendapatan_bersih),
            'akuns_pendapatan' => $akuns_pendapatan,
            'akuns_beban' => $akuns_beban,
        ];
    }
}
