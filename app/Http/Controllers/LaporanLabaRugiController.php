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
        $saldo_akhir = auth()->user()->company->saldoakhir;

        $akuns_pendapatan = NamaAkun::where([
            ['nama', 'like', '%pendapatan%'],
            ['company_id', '=', auth()->user()->company->id],
        ])->get();

        $akuns_beban = NamaAkun::where([
            ['nama', 'like', '%beban%'],
            ['company_id', '=', auth()->user()->company->id],
        ])->get();

        return [
            'pendapatan' => formatRupiah($saldo_akhir->pendapatan),
            'beban' => formatRupiah($saldo_akhir->beban),
            'pendapatan_bersih' => formatRupiah($saldo_akhir->pendapatan_bersih),
            'akuns_pendapatan' => $akuns_pendapatan,
            'akuns_beban' => $akuns_beban,
        ];
    }
}
