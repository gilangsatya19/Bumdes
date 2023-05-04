<?php

namespace App\Http\Controllers;

use App\Models\DataPemasukanKas;
use App\Models\PemasukanKas;
use Illuminate\Http\Request;
use App\Models\NamaAkun;

class JurnalPemasukanKasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.jurnal_khusus.pemasukan_kas.index',[
            'jurnals' => PemasukanKas::all(),
        ]);
    }
    public function createNew(Request $request)
    {
        $data = new PemasukanKas;
        $data->tanggal = $request->tanggal;
        $data->user_id = auth()->user()->id;
        $data->save();
        session(['pemasukan_kas_id' => $data->id]);
        return redirect('/pemasukan_kas/create');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.jurnal_khusus.pemasukan_kas.create',[
            'title' => 'Tambah Data',
            'method' => 'POST',
            'action' => 'pemasukan_kas',
            'nama_akuns' => NamaAkun::all(),
            
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
        $akuns = NamaAkun::all();
        $data = new DataPemasukanKas;
        $data->nama_akun = $request->nama_akun;
        
        foreach ($akuns as $akun){
            if($data->nama_akun == $akun->nama){
                $data->noref = $akun->kode_rekening;
            }
        }
        
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->pemasukan_kas_id = session('pemasukan_kas_id');
        $data->save();
        return redirect('/pemasukan_kas/create');
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
