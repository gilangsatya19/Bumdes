<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaAkun;

class LabaRugiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akuns_pendapatan = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', auth()->user()->company->id)
            ->whereBetween('detail_akun.kode_rekening', [4000, 4999])
            ->get();
        $total_pendapatan = 0;
        foreach ($akuns_pendapatan as $akun) {
            $total_pendapatan += $akun->saldo + $akun->penyesuaian;
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
        $total_laba_rugi_bersih = $total_pendapatan_all - $total_beban_all;
        return view('bumdes.dashboard.laporan_keuangan.laba_rugi.index',[
            'nama_akuns' => auth()->user()->company->namaakun,
            'saldo_akhir' => auth()->user()->company->saldoakhir,
            'total_pendapatan_all' => $total_pendapatan_all,
            'total_beban_all' => $total_beban_all,
            'total_laba_rugi_bersih' => $total_laba_rugi_bersih,
            'i' => 0,
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
    public function edit($id)
    {
        //
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
        //
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
