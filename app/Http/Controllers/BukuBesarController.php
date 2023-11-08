<?php

namespace App\Http\Controllers;

use App\Models\NamaAkun;
use Illuminate\Http\Request;
use App\Models\JurnalUmum;
use App\Models\DataJurnalUmum;
use App\Models\JurnalPenyesuaian;
use Illuminate\Support\Str;

class BukuBesarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal_penyesuaians = JurnalPenyesuaian::where('company_id', auth()->user()->company->id)
            ->orderBy('tanggal', 'desc')
            ->get();

        $jurnals = auth()->user()->company->jurnalumums()->orderBy('tanggal', 'desc')->get();

        return view('bumdes.dashboard.buku_besar.index',[
            'nama_akuns' => auth()->user()->company->namaakun,
            'jurnals' => $jurnals,
            'penyesuaians' => $jurnal_penyesuaians,
            'iterasi' => '0',
            'saldo' => '0',
            'debit_total' =>'0',
            'kredit_total' =>'0',
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
