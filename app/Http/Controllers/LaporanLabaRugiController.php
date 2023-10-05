<?php

namespace App\Http\Controllers;

use PDF;

class LaporanLabaRugiController extends Controller
{
    //
    public function index()
    {
        $data = [
            'pendapatan' => '1000000',
            'beban' => '500000',
            'laba' => '500000'
        ];

        $pdf = PDF::loadView('pdf.laba_rugi', $data);

        return $pdf->download('laporan-laba-rugi.pdf');
    }

    public function preview()
    {
        $data = [
            'pendapatan' => '1000000',
            'beban' => '500000',
            'laba' => '500000'
        ];

        return view('pdf.laba_rugi', $data);
    }
}
