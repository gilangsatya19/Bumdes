<?php

namespace App\Http\Controllers;

use App\Models\NamaAkun;
use App\Models\DetailAkun;
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

        return view('bumdes.dashboard.wtb.index', [
            'nama_akuns' => auth()->user()->company->namaakun,
            'saldo_akhir' => auth()->user()->company->saldoakhir,
            'neraca_saldo_debit' => 0,
            'neraca_saldo_kredit' => 0,
            'penyesuaian_debit' => 0,
            'penyesuaian_kredit' => 0,
            'neraca_setelahnya_debit' => 0,
            'neraca_setelahnya_kredit' => 0,
            'laba_rugi_debit' => 0,
            'laba_rugi_kredit' => 0,
            'neraca_debit' => 0,
            'neraca_kredit' => 0,
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
        return view('bumdes.dashboard.wtb.create');
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
        return view('bumdes.dashboard.wtb.update',[
            'title' => 'Ubah',
            'method' => 'PUT',
            'action' => 'wtb/'.$id,
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
        $akuns = auth()->user()->company->namaakun;
        $saldo_akhir = auth()->user()->company->saldoakhir;
        $i = 0;
        $data = DetailAkun::find($id);
        if($data->penyesuaian == 0){
            foreach($akuns as $akun){
                $i+=1;
                if($i <= 56 && $data->kode_rekening == $akun->detailakun->kode_rekening){
                    $saldo_akhir->neraca_setelahnya +=  $request->debit - $request->kredit;
                    $saldo_akhir->neraca +=  $request->debit - $request->kredit;
                    $saldo_akhir->save();
                    $data->penyesuaian = $request->debit - $request->kredit;
                    $data->save();
                    return redirect('/wtb');
                }else if($i > 56 && $data->kode_rekening == $akun->detailakun->kode_rekening){
                    $saldo_akhir->laba_rugi +=  $request->debit - $request->kredit;
                    $saldo_akhir->save();
                    $data->penyesuaian = $request->debit - $request->kredit;
                    $data->save();
                    return redirect('/wtb');
                }
            }
        }else{
            foreach($akuns as $akun){
                $i+=1;
                if($i <= 56 && $data->kode_rekening == $akun->detailakun->kode_rekening){
                    if ($data->penyesuaian > 0) {
                        $saldo_akhir->neraca_setelahnya +=  $request->debit - $request->kredit - $data->penyesuaian;
                        $saldo_akhir->neraca +=  $request->debit - $request->kredit - $data->penyesuaian;
                    }else{
                        $saldo_akhir->neraca_setelahnya +=  $request->debit - $request->kredit + $data->penyesuaian;
                        $saldo_akhir->neraca +=  $request->debit - $request->kredit + $data->penyesuaian;
                    }
                    $saldo_akhir->neraca_setelahnya +=  $request->debit - $request->kredit;
                    $saldo_akhir->neraca +=  $request->debit - $request->kredit;
                    $saldo_akhir->save();
                    $data->penyesuaian = $request->debit - $request->kredit;
                    $data->save();
                    return redirect('/wtb');
                }else if($i > 56 && $data->kode_rekening == $akun->detailakun->kode_rekening){
                    if ($data->penyesuaian > 0) {
                        $saldo_akhir->laba_rugi +=  $request->debit - $request->kredit - $data->penyesuaian;
                    }else{
                        $saldo_akhir->laba_rugi +=  $request->debit - $request->kredit + $data->penyesuaian;
                    }
                    $saldo_akhir->laba_rugi +=  $request->debit - $request->kredit;
                    $saldo_akhir->save();
                    $data->penyesuaian = $request->debit - $request->kredit;
                    $data->save();
                    return redirect('/wtb');
                }
            }
        }


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
